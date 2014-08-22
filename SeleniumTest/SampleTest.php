<?php
class SampleTest extends PHPUnit_Extensions_Selenium2TestCase
{

    protected function setUp()
    {
        $this->setHost('127.0.0.1');
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://127.0.0.1/');
        $this->setPort(8000);
    }

    public function testSimpleClick()
    {
        $this->url('http://127.0.0.1/');

        $node = $this->byId('current_count');
        $this->assertEquals('0', $node->text());
    }
}
