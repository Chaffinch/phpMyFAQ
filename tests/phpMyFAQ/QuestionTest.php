<?php

namespace phpMyFAQ;

use phpMyFAQ\Database\Sqlite3;
use phpMyFAQ\Setup\Update;
use PHPUnit\Framework\TestCase;

class QuestionTest extends TestCase
{
    private Configuration $configuration;
    private Sqlite3 $dbHandle;
    private Question $question;
    protected function setUp(): void
    {
        parent::setUp();

        $this->dbHandle = new Sqlite3();
        $this->dbHandle->connect(PMF_TEST_DIR . '/test.db', '', '');
        $this->configuration = new Configuration($this->dbHandle);
        $language = new Language($this->configuration);
        $language->setLanguage(false, 'en');
        $this->configuration->setLanguage($language);

        $this->question = new Question($this->configuration);
    }

    protected function tearDown(): void
    {
        $this->dbHandle->query('DELETE FROM faqquestions');
    }

    public function testAdd(): void
    {
        $questionData = new Entity\QuestionEntity();
        $questionData
            ->setUsername('testuser')
            ->setEmail('test@example.org')
            ->setCategoryId(1)
            ->setQuestion('Test question')
            ->setIsVisible(true);

        $this->assertTrue($this->question->add($questionData));
    }

    public function testDelete(): void
    {
        $questionData = new Entity\QuestionEntity();
        $questionData
            ->setUsername('testuser')
            ->setEmail('test@example.org')
            ->setCategoryId(1)
            ->setQuestion('Test question')
            ->setIsVisible(true);

        $this->question->add($questionData);
        $this->assertTrue($this->question->delete(1));
    }

    public function testGet(): void
    {
        $questionData = new Entity\QuestionEntity();
        $questionData
            ->setUsername('testuser')
            ->setEmail('test@example.org')
            ->setCategoryId(1)
            ->setQuestion('Test question')
            ->setIsVisible(true);

        $this->question->add($questionData);

        $question = $this->question->get(1);

        $this->assertCount(8, $question);
    }

    public function testGetAll(): void
    {
        $questionData = new Entity\QuestionEntity();
        $questionData
            ->setUsername('testuser')
            ->setEmail('test@example.org')
            ->setCategoryId(1)
            ->setQuestion('Test question')
            ->setIsVisible(true);

        $this->question->add($questionData);

        $questionData = new Entity\QuestionEntity();
        $questionData
            ->setUsername('testuser')
            ->setEmail('test@example.org')
            ->setCategoryId(1)
            ->setQuestion('Test question')
            ->setIsVisible(true);

        $this->question->add($questionData);

        $questions = $this->question->getAll();

        $this->assertIsArray($questions);
        $this->assertCount(2, $questions);
    }

    public function testGetVisibility(): void
    {
        $questionData = new Entity\QuestionEntity();
        $questionData
            ->setUsername('testuser')
            ->setEmail('test@example.org')
            ->setCategoryId(1)
            ->setQuestion('Test question')
            ->setIsVisible(false);

        $this->question->add($questionData);

        $this->assertEquals('N', $this->question->getVisibility(1));
    }

    public function testSetVisibility(): void
    {
        $questionData = new Entity\QuestionEntity();
        $questionData
            ->setUsername('testuser')
            ->setEmail('test@example.org')
            ->setCategoryId(1)
            ->setQuestion('Test question')
            ->setIsVisible(true);

        $this->question->add($questionData);

        $this->assertEquals('Y', $this->question->getVisibility(1));

        $this->question->setVisibility(1, 'N');

        $this->assertEquals('N', $this->question->getVisibility(1));
    }
}
