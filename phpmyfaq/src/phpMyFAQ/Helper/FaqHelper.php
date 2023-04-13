<?php

/**
 * Helper class for phpMyFAQ FAQs.
 *
 * This Source Code Form is subject to the terms of the Mozilla Public License,
 * v. 2.0. If a copy of the MPL was not distributed with this file, You can
 * obtain one at https://mozilla.org/MPL/2.0/.
 *
 * @package   phpMyFAQ\Helper
 * @author    Thorsten Rinne <thorsten@phpmyfaq.de>
 * @copyright 2010-2023 phpMyFAQ Team
 * @license   https://www.mozilla.org/MPL/2.0/ Mozilla Public License Version 2.0
 * @link      https://www.phpmyfaq.de
 * @since     2010-11-12
 */

namespace phpMyFAQ\Helper;

use DOMDocument;
use DOMXPath;
use Exception;
use ParsedownExtra;
use phpMyFAQ\Category;
use phpMyFAQ\Configuration;
use phpMyFAQ\Date;
use phpMyFAQ\Entity\FaqEntity;
use phpMyFAQ\Faq;
use phpMyFAQ\Helper;
use phpMyFAQ\Language\LanguageCodes;
use phpMyFAQ\Link;
use phpMyFAQ\Strings;
use phpMyFAQ\Translation;
use phpMyFAQ\Utils;

/**
 * Class FaqHelper
 *
 * @package phpMyFAQ\Helper
 */
class FaqHelper extends Helper
{
    /**
     * Constructor.
     */
    public function __construct(Configuration $config)
    {
        $this->config = $config;
    }

    /**
     * Rewrites the CSS class generated by TinyMCE for HighlightJS.
     */
    public function renderMarkupContent(string $answer): string
    {
        return str_replace('class="language-markup"', 'class="language-html"', $answer);
    }

    /**
     * Extends URL fragments (e.g. <a href="#foo">) with the full default URL.
     */
    public function rewriteUrlFragments(string $answer, string $currentUrl): string
    {
        return str_replace('href="#', 'href="' . $currentUrl . '#', $answer);
    }

    /**
     * Renders a Share on Twitter link.
     */
    public function renderTwitterShareLink(string $url): string
    {
        if (empty($url) || $this->config->get('socialnetworks.disableAll')) {
            return '';
        }

        return sprintf(
            '<i aria-hidden="true" class="fa fa-twitter"></i>' .
            '<a rel="nofollow" href="%s" target="_blank" class="text-decoration-none">Twitter</a>',
            $url
        );
    }

    /**
     * Renders a "Send to friend" HTML snippet.
     */
    public function renderSendToFriend(string $url): string
    {
        if (empty($url) || !$this->config->get('main.enableSendToFriend')) {
            return '';
        }

        return sprintf(
            '<i aria-hidden="true" class="fa fa-envelope"></i>' .
            '<a rel="nofollow" href="%s" class="text-decoration-none">%s</a>',
            $url,
            Translation::get('msgSend2Friend')
        );
    }


    /**
     * Renders a select box with all translations of a FAQ.
     */
    public function renderChangeLanguageSelector(Faq $faq, int $categoryId): string
    {
        $html = '';
        $faqUrl = sprintf(
            '?action=faq&amp;cat=%d&amp;id=%d&amp;artlang=%%s',
            $categoryId,
            $faq->faqRecord['id']
        );

        $oLink = new Link($this->config->getDefaultUrl() . $faqUrl, $this->config);
        $oLink->itemTitle = $faq->faqRecord['title'];
        $availableLanguages = $this->config->getLanguage()->isLanguageAvailable($faq->faqRecord['id']);

        if ((is_countable($availableLanguages) ? count($availableLanguages) : 0) > 1) {
            $html = '<form method="post">';
            $html .= '<select name="language" onchange="top.location.href = this.options[this.selectedIndex].value;">';

            foreach ($availableLanguages as $language) {
                $html .= sprintf('<option value="%s"', sprintf($oLink->toString(), $language));
                $html .= ($faq->faqRecord['lang'] === $language ? ' selected' : '');
                $html .= sprintf('>%s</option>', LanguageCodes::get($language));
            }

            $html .= '</select></form>';
        }

        return $html;
    }

    /**
     * Renders a preview of the answer.
     *
     * @throws Exception
     */
    public function renderAnswerPreview(string $answer, int $numWords): string
    {
        if ($this->config->get('main.enableMarkdownEditor')) {
            $parseDown = new ParsedownExtra();
            return Utils::chopString(strip_tags((string) $parseDown->text($answer)), $numWords);
        } else {
            return Utils::chopString(strip_tags($answer), $numWords);
        }
    }

    /**
     * Creates an overview with all categories with their FAQs.
     *
     * @throws Exception
     */
    public function createOverview(Category $category, Faq $faq, string $language = ''): string
    {
        $output = '';

        // Initialize categories
        $category->transform(0);

        // Get all FAQs
        $faq->getAllRecords(FAQ_SORTING_TYPE_CATID_FAQID, ['lang' => $language]);
        $date = new Date($this->config);

        if (count($faq->faqRecords)) {
            $lastCategory = 0;
            foreach ($faq->faqRecords as $data) {
                if ($data['category_id'] !== $lastCategory) {
                    $output .= sprintf('<h3>%s</h3>', $category->getPath($data['category_id'], ' &raquo; '));
                }

                $output .= sprintf('<h4>%s</h4>', Strings::htmlentities($data['title']));
                $output .= sprintf('<article>%s</article>', $data['content']);
                $output .= sprintf(
                    '<p>%s: %s<br>%s',
                    Translation::get('msgAuthor'),
                    Strings::htmlentities($data['author']),
                    Translation::get('msgLastUpdateArticle') . $date->format($data['updated'])
                );
                $output .= '<hr>';

                $lastCategory = $data['category_id'];
            }
        }

        return $output;
    }

    /**
     * Creates a list of links with available languages to edit a FAQ
     * in the admin backend.
     */
    public function createFaqTranslationLinkList(int $faqId, int $categoryId, string $faqLang): string
    {
        $output = '';

        $availableLanguages = $this->config->getLanguage()->isLanguageAvailable($categoryId, 'faqcategories');
        foreach ($availableLanguages as $languageCode) {
            if ($languageCode !== $faqLang) {
                $output .= sprintf(
                    '<a class="dropdown-item" href="?action=editentry&id=%d&cat=%d&translateTo=%s">%s %s</a>',
                    $faqId,
                    $categoryId,
                    $languageCode,
                    'Translate to',
                    LanguageCodes::get($languageCode)
                );
            } else {
                $output .= '<a class="dropdown-item">n/a</a>';
            }
        }

        return $output;
    }

    /**
     * Returns the URL for a given FAQ Entity and category ID.
     * @param FaqEntity $faqEntity
     * @param int       $categoryId
     * @return string
     */
    public function createFaqUrl(FaqEntity $faqEntity, int $categoryId): string
    {
        return sprintf(
            '%s?action=faq&cat=%d&id=%d&artlang=%s',
            $this->config->getDefaultUrl() . 'index.php',
            $categoryId,
            $faqEntity->getId(),
            $faqEntity->getLanguage()
        );
    }

    /**
     * Remove <script> tags, we don't need them
     *
     * @param string $content
     * @return string
     */
    public function cleanUpContent(string $content): string
    {
        $document = new DOMDocument();
        $document->loadHTML($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $scriptTags = $document->getElementsByTagName('script');

        for ($i = 0; $i < $scriptTags->length; $i++) {
            $scriptTags->item($i)->parentNode->removeChild($scriptTags->item($i));
        }

        $xpath = new DOMXPath($document);
        $onAttributes = $xpath->query("//*/@*[starts-with(name(), 'on')]");
        foreach ($onAttributes as $onAttribute) {
            $onAttribute->ownerElement->removeAttributeNode($onAttribute);
        }

        $body = $xpath->query('body')->item(0);

        return preg_replace(['/\r/', '/\n/'], '', $document->saveHTML($body));
    }
}
