<?php

use PHPUnit\Framework\TestCase;
use Krzysztofzylka\HtmlGenerator\HtmlGenerator;

/**
 * Test class for HtmlGenerator.
 * This test class provides the tests for the methods in the HtmlGenerator class.
 */
class HtmlGenerator2Test extends TestCase
{
    /**
     * Test the createTag method.
     * This test checks if createTag method returns correct object with proper properties.
     */
    public function testCreateTag()
    {
        // Create an instance of HtmlGenerator class using createTag method
        $tag = HtmlGenerator::createTag('p', 'content', 'test-class', ['id' => 'test-id']);

        // Check if tag is instance of HtmlGenerator
        $this->assertInstanceOf(HtmlGenerator::class, $tag);

        // The expected HTML string
        $expected = '<p id="test-id" class="test-class">content</p>';

        // Check if the object converts to the expected HTML string
        $this->assertEquals($expected, (string)$tag);

        // Check individual attributes
        $this->assertEquals('test-class', $tag->getAttribute('class'));
        $this->assertEquals('test-id', $tag->getAttribute('id'));
    }
    /**
     * Test the createTag method.
     * This test checks if createTag method returns correct object with proper properties.
     */
    public function testCreateTag2()
    {
        // Create an instance of HtmlGenerator class using createTag method
        $tag = HtmlGenerator::createTag('p', 'content', 'test-class', ['id' => 'test-id']);
        $tag->addAttribute('data-add', 'add');
        $tag->appendAttribute('class', 'append-class');

        // Check if tag is instance of HtmlGenerator
        $this->assertInstanceOf(HtmlGenerator::class, $tag);

        // The expected HTML string
        $expected = '<p id="test-id" class="test-class append-class" data-add="add">content</p>';

        // Check if the object converts to the expected HTML string
        $this->assertEquals($expected, (string)$tag);

        // Check individual attributes
        $this->assertEquals('test-class append-class', $tag->getAttribute('class'));
        $this->assertEquals('test-id', $tag->getAttribute('id'));
    }
}
