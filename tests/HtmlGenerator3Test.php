<?php

namespace Krzysztofzylka\HtmlGenerator\Test;

use Krzysztofzylka\HtmlGenerator\HtmlGenerator;
use PHPUnit\Framework\TestCase;

/**
 * Class HtmlGenerator3Test
 *
 * Contains unit tests for HtmlGenerator class,
 * specifically testing removeAttribute method.
 *
 * @see HtmlGenerator
 */
class HtmlGenerator3Test extends TestCase
{
    /**
     * Tests the removeAttribute method of HtmlGenerator.
     *
     * A div tag is created with a class attribute. removeAttribute is called
     * to remove the defined class. The test asserts that the class attribute
     * no longer exists after removal.
     */
    public function testRemoveAttribute(): void
    {
        $htmlGenerator = HtmlGenerator::createTag('div', null, 'test-class');
        $htmlGenerator->removeAttribute('class');

        $this->assertEquals('<div></div>', $htmlGenerator->__toString());
    }

    /**
     * Tests the removeAttribute method of HtmlGenerator.
     *
     * A div tag is created with a class attribute containing multiple classes. 
     * removeAttribute is called to remove one of the defined classes. 
     * The test asserts that the removed class does not exist while the other classes are still present.
     */
    public function testRemoveAttributeValue(): void
    {
        $htmlGenerator = HtmlGenerator::createTag('div', null, 'class1 class2 class3');
        $htmlGenerator->removeAttribute('class', 'class2');

        $this->assertEquals('<div class="class1 class3"></div>', $htmlGenerator->__toString());
    }
}