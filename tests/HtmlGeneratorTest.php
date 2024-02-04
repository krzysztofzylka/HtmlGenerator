<?php

use Krzysztofzylka\HtmlGenerator\HtmlGenerator;
use PHPUnit\Framework\TestCase;

/**
 * Class HtmlGeneratorTest
 * 
 * This class is designed to test the functionality of the HtmlGenerator class,
 * Specifically, the method generateAttributes().
 */
class HtmlGeneratorTest extends TestCase
{
    /**
     * Method testGenerateAttributes
     *
     * This method tests the functionality of the generateAttributes() method
     * in the HtmlGenerator class.
     */
    public function testGenerateAttributes()
    {
        // Create a new instance of the HtmlGenerator class
        $htmlGenerator = HtmlGenerator::createTag('div', 'Hello', 'myClass', ['id' => 'myId', 'data-test' => 'test']);

        /* Call the generateAttributes() method through reflection as the method is private.
         * First, we'll create a reflection of the HtmlGenerator class and then a reflection method
         * of the 'generateAttributes' method. Next, we'll set this method to accessible and call it.
         */
        $class = new \ReflectionClass(HtmlGenerator::class);
        $method = $class->getMethod('generateAttributes');
        $method->setAccessible(true);
        $attributes = $method->invoke($htmlGenerator);

        // Check that the expected attribute string is returned
        $this->assertEquals(' id="myId" data-test="test" class="myClass"', $attributes);
    }
}