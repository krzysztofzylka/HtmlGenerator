<?php

namespace krzysztofzylka\HtmlGenerator\html;

use krzysztofzylka\HtmlGenerator\Tag;

class DetailsTag extends Tag {

    private string $summary = 'Details';

    /**
     * Set summary
     * @param string $summary
     * @return DetailsTag
     */
    public function summary(string $summary) : self {
        $this->summary = $summary;

        return $this;
    }

    public function __toString(): string {
        $this->value((new Tag('summary'))->value($this->summary) . $this->getValue());

        return parent::__toString();
    }

}