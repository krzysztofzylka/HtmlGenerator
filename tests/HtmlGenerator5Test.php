<?php

use PHPUnit\Framework\TestCase;
use Krzysztofzylka\HtmlGenerator\HtmlGenerator;

class HtmlGenerator5Test extends TestCase
{
    /**
     * @test
     */
    public function it_appends_content_correctly_to_htmlgenerator()
    {
        // Create a HtmlGenerator instance with initial content
        $htmlGenerator = HtmlGenerator::createTag('div', 'initial content');

        // Add additional content
        $htmlGenerator->appendContent(' added content');

        // Assert that the new content was added to the existing content
        $this->assertEquals('initial content added content', $htmlGenerator->getContent());
    }
}