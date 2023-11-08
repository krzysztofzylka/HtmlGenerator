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
     * Content
     * @var string
     */
    private string $content = '';

    /**
     * Tag attributes
     * @var array
     */
    private array $attributes = [];

    /**
     * Create tag
     * @param string $tag
     */
    public function __construct(string $tag)
    {
        $this->tagName = $tag;
    }

    /**
     * Set content
     * @param string $content
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Add attributes
     * @param array $attributes
     * @return $this
     */
    public function addAttributes(array $attributes): self
    {
        $this->attributes = $attributes + $this->attributes;

        return $this;
    }

    /**
     * Add attribute
     * @param string $key
     * @param string $value
     * @return $this
     */
    public function addAttribute(string $key, string $value): self
    {
        $this->attributes[$key] = $value;

        return $this;
    }

    /**
     * Generate html tag
     * @return string
     */
    public function __toString(): string
    {
        return '<' . $this->tagName . $this->generateAttributes() . '>' . $this->content . '</' . $this->tagName . '>';
    }

    /**
     * Generate attributes
     * @return string
     */
    private function generateAttributes(): string
    {
        $attributesHtml = '';

        foreach ($this->attributes as $key => $value) {
            $attributesHtml .= ' ' . $key . '="' . $value . '"';
        }

        return $attributesHtml;
    }

    /**
     * Get attribute
     * @param string $name
     * @return string
     */
    public function getAttribute(string $name): string
    {
        return $this->attributes[$name] ?? '';
    }

    /**
     * Append to attribute
     * @param string $name
     * @param string $value
     * @return self
     */
    public function appendAttribute(string $name, string $value): self
    {
        $emptyAttribute = empty($this->getAttribute($name));

        $this->addAttribute('class', $emptyAttribute ? $value : ($this->getAttribute($name) . ' ' . $value));

        return $this;
    }

    /**
     * Remove attribute
     * @param string $name
     * @return $this
     */
    public function removeAttribute(string $name): self
    {
        unset($this->attributes[$name]);

        return $this;
    }

    /**
     * Set id attribute
     * @param string $id
     * @return $this
     */
    public function setId(string $id): self
    {
        $this->addAttribute('id', $id);

        return $this;
    }

    /**
     * Set name attribute
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->addAttribute('name', $name);

        return $this;
    }

}