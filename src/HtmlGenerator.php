<?php

namespace Krzysztofzylka\HtmlGenerator;

class HtmlGenerator
{

    /**
     * Tag name
     * @var string
     */
    private string $tagName;

    /**
     * Content of the tag
     * @var string
     */
    private string $content = '';

    /**
     * The $attributes variable is an array that stores the attributes for a given object.
     */
    private array $attributes = [];

    /**
     * Constructs a new instance of the class.
     * Initializes the object by assigning the specified tag name to the object's `tagName` property.
     * @param string $tag The tag name for the object.
     */
    public function __construct(string $tag)
    {
        $this->tagName = $tag;
    }

    /**
     * Sets the content of the HTML tag.
     * The content is the text or HTML code that will be
     * displayed inside the tag when it is rendered.
     * @param string $content The content to be set for the HTML tag.
     * @return self Returns an instance of the class with the updated content.
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Adds the specified attributes to the element.
     * The method takes an associative array of attributes
     * as parameter and adds them to the existing attributes
     * of the HTML element. If an attribute already exists,
     * the new value will replace the existing value.
     * @param array $attributes An associative array of attributes to be added to the element.
     * @return self The instance of the class.
     */
    public function addAttributes(array $attributes): self
    {
        $this->attributes = $attributes + $this->attributes;

        return $this;
    }

    /**
     * Adds an attribute to the HTML tag.
     * @param string $key The attribute key.
     * @param string $value The attribute value.
     * @return self Returns the modified object.
     */
    public function addAttribute(string $key, string $value): self
    {
        $this->attributes[$key] = $value;

        return $this;
    }

    /**
     * Get the value of the specified attribute by name
     * @param string $name The name of the attribute
     * @return string The value of the attribute if found, otherwise an empty string
     */
    public function getAttribute(string $name): string
    {
        return $this->attributes[$name] ?? '';
    }

    /**
     * Appends a new attribute to the html tag
     * @param string $name The name of the attribute
     * @param string $value The value of the attribute
     * @return self Returns the modified instance of the class
     */
    public function appendAttribute(string $name, string $value): self
    {
        $attributeValue = $this->getAttribute($name);
        $this->addAttribute('class', empty($attributeValue) ? $value : ($attributeValue . ' ' . $value));

        return $this;
    }

    /**
     * Remove an attribute from the html tag
     * @param string $name The name of the attribute to remove
     * @return self Returns a new instance with the attribute removed
     */
    public function removeAttribute(string $name): self
    {
        unset($this->attributes[$name]);

        return $this;
    }

    /**
     * Set the ID attribute of the HTML tag.
     * @param string $id The ID value to be set.
     * @return self Returns the instance of the current object.
     */
    public function setId(string $id): self
    {
        $this->addAttribute('id', $id);

        return $this;
    }

    /**
     * Set the name attribute of the HTML tag
     * @param string $name The value of the name attribute
     * @return self Returns the instance of the class for method chaining
     */
    public function setName(string $name): self
    {
        $this->addAttribute('name', $name);

        return $this;
    }

    /**
     * Set the class attribute of the HTML tag
     * @param string $class The value of the class attribute
     * @return self Returns the instance of the class for method chaining
     */
    public function setClass(string $class): self
    {
        $this->addAttribute('class', $class);

        return $this;
    }

    /**
     * Returns the string representation of the object.
     * This method is automatically called when the object
     * is used in a string context. It returns the formatted
     * HTML tag with its attributes and content.
     * @return string The string representation of the object.
     */
    public function __toString(): string
    {
        return '<' . $this->tagName . $this->generateAttributes() . '>' . $this->content . '</' . $this->tagName . '>';
    }

    /**
     * Generate HTML attribute string.
     * This method iterates over the attributes array and generates the corresponding HTML attribute string.
     * @return string The generated HTML attribute string.
     */
    private function generateAttributes(): string
    {
        $attributesHtml = '';

        foreach ($this->attributes as $key => $value) {
            $attributesHtml .= ' ' . $key . '="' . $value . '"';
        }

        return $attributesHtml;
    }

}