/**
 * Admin configuration
 *
 * This Source Code Form is subject to the terms of the Mozilla Public License,
 * v. 2.0. If a copy of the MPL was not distributed with this file, You can
 * obtain one at https://mozilla.org/MPL/2.0/.
 *
 * @package   phpMyFAQ
 * @author    Thorsten Rinne
 * @copyright 2022-2023 phpMyFAQ Team
 * @license   http://www.mozilla.org/MPL/2.0/ Mozilla Public License Version 2.0
 * @link      https://www.phpmyfaq.de
 * @since     2022-01-29
 */

import { Tab } from 'bootstrap';

export const handleConfiguration = async () => {
  const configTabList = [].slice.call(document.querySelectorAll('#configuration-list a'));
  if (configTabList.length) {
    let tabLoaded = false;
    configTabList.forEach((element) => {
      const configTabTrigger = new Tab(element);
      element.addEventListener('shown.bs.tab', async (event) => {
        event.preventDefault();
        let target = event.target.getAttribute('href');
        await fetchConfiguration(target);

        switch (target) {
          case '#main':
            await handleTranslation();
            await handleTemplates();
            break;
          case '#records':
            await handleFaqsSortingKeys();
            await handleFaqsSortingOrder();
            break;
        }

        tabLoaded = true;
        configTabTrigger.show();
      });
    });

    if (!tabLoaded) {
      await fetchConfiguration('#main');
      await handleTranslation();
      await handleTemplates();
    }
  }
};

export const handleTranslation = async () => {
  const translationSelectBox = document.getElementsByName('edit[main.language]');

  if (translationSelectBox !== null) {
    const options = await fetchTranslations();
    translationSelectBox[0].insertAdjacentHTML('beforeend', options);
  }
};

export const handleTemplates = async () => {
  const templateSelectBox = document.getElementsByName('edit[main.templateSet]');
  if (templateSelectBox !== null) {
    const options = await fetchTemplates();
    templateSelectBox[0].insertAdjacentHTML('beforeend', options);
  }
};

export const handleFaqsSortingKeys = async () => {
  const faqsOrderSelectBox = document.getElementsByName('edit[records.orderby]');
  if (faqsOrderSelectBox !== null) {
    const currentValue = faqsOrderSelectBox[0].dataset.pmfConfigurationCurrentValue;
    const options = await fetchFaqsSortingKeys(currentValue);
    faqsOrderSelectBox[0].insertAdjacentHTML('beforeend', options);
  }
};

export const handleFaqsSortingOrder = async () => {
  const faqsOrderSelectBox = document.getElementsByName('edit[records.sortby]');
  if (faqsOrderSelectBox !== null) {
    const currentValue = faqsOrderSelectBox[0].dataset.pmfConfigurationCurrentValue;
    const options = await fetchFaqsSortingOrder(currentValue);
    faqsOrderSelectBox[0].insertAdjacentHTML('beforeend', options);
  }
};

const fetchConfiguration = async (target) => {
  try {
    const response = await fetch(`./api/configuration/list/${target.substring(1)}`);

    if (!response.ok) {
      console.error('Request failed!');
      return;
    }

    const html = await response.text();
    const tabContent = document.querySelector(target);

    while (tabContent.firstChild) {
      tabContent.removeChild(tabContent.firstChild);
    }

    tabContent.innerHTML = html.toString();
  } catch (error) {
    console.error(error.message);
  }
};

const fetchTranslations = async () => {
  try {
    const response = await fetch(`./api/configuration/translations`);

    if (!response.ok) {
      console.error('Request failed!');
      return;
    }

    return await response.text();
  } catch (error) {
    console.error(error.message);
  }
};

const fetchTemplates = async () => {
  try {
    const response = await fetch(`./api/configuration/templates`);

    if (!response.ok) {
      console.error('Request failed!');
      return;
    }

    return await response.text();
  } catch (error) {
    console.error(error.message);
  }
};

const fetchFaqsSortingKeys = async (currentValue) => {
  try {
    const response = await fetch(`./api/configuration/faqs-sorting-key/${currentValue}`);

    if (!response.ok) {
      console.error('Request failed!');
      return;
    }

    return await response.text();
  } catch (error) {
    console.error(error.message);
  }
};

const fetchFaqsSortingOrder = async (currentValue) => {
  try {
    const response = await fetch(`./api/configuration/faqs-sorting-order/${currentValue}`);

    if (!response.ok) {
      console.error('Request failed!');
      return;
    }

    return await response.text();
  } catch (error) {
    console.error(error.message);
  }
};
