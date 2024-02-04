<?php

namespace Krzysztofzylka\HtmlGenerator\Tests;

use PHPUnit\Framework\TestCase;
use Krzysztofzylka\HtmlGenerator\HtmlGenerator;

/**
 * PhpUnit test class for HtmlGenerator
 * 
 * This test class focuses on testing the getContent method 
 * of HtmlGenerator class
 */
class HtmlGenerator4Test extends TestCase
{
    /**
     * Tests the getContent method
     *
     * We create an HtmlGenerator instance and set content.
     * We then retrieve the content using getContent method 
     * and test whether it matches the content we set.
     */
    public function testGetContent()
    {
        $tag = 'p';
        $content = 'Hello, world!';
        
        $htmlGenerator = HtmlGenerator::createTag($tag);
        $htmlGenerator->setContent($content);
        $generatedContent = $htmlGenerator->getContent();

        $this->assertEquals($content, $generatedContent);
    }
}