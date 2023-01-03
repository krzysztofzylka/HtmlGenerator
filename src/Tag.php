<?php

namespace krzysztofzylka\HtmlGenerator;

class Tag {

    private array $voidTags = ['br', 'hr'];
    private string $tag;
    private string $value;
    private array $attributes = [];

    public function __construct(string $tag) {
        $this->tag = $tag;
    }

    /**
     * Set tag value
     * @param string $value
     * @return self
     */
    public function value(string $value) : self {
        $this->value = $value;

        return $this;
    }

    /**
     * Add attribute
     * @param string $name
     * @param string $value
     * @param bool $clearAttribute clear attribute
     * @return self
     */
    public function attribute(string $name, string $value, bool $clearAttribute = false) : self {
        if (isset($this->attributes[$name]) && !$clearAttribute) {
            $this->attributes[$name] = $this->attributes[$name] . ' ' . $value;
        } else {
            $this->attributes[$name] = $value;
        }

        return $this;
    }

    /**
     * Set id attribute
     * @param string $id
     * @return self
     */
    public function id(string $id) : self {
        $this->attribute('id', $id, true);

        return $this;
    }

    /**
     * Add class attribute
     * @param string $class
     * @return self
     */
    public function class(string $class) : self {
        $this->attribute('class', $class, false);

        return $this;
    }

    /**
     * Clear attribute
     * @param string $name
     * @return self
     */
    public function clearAttribute(string $name) : self {
        unset($this->attributes[$name]);

        return $this;
    }

    /**
     * Get value
     * @return string
     */
    public function getValue() : string {
        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString() : string {
        if (in_array($this->tag, $this->voidTags) && !isset($this->value)) {
            return '<' . $this->tag . $this->generateAttributes() . ' />';
        }

        return '<' . $this->tag . $this->generateAttributes() . '>' . ($this->value ?? '') . '</' . $this->tag . '>';
    }

    /**
     * Generate attributes
     * @return string
     */
    private function generateAttributes() : string {
        $attributesArray = [];

        foreach ($this->attributes as $attributeName => $attributeValue) {
            $attributesArray[] = $attributeName . '="' . $attributeValue . '"';
        }

        if (empty($attributesArray)) {
            return '';
        }

        return ' ' . implode(' ', $attributesArray);
    }

}