<?php

namespace krzysztofzylka\HtmlGenerator\html;

use Krzysztofzylka\HtmlGenerator\Tag;

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
        $value = $this->getValue();

        if (isset($this->header)) {
            $value = (new Tag($this->headerTag))
                    ->value($this->header)
                    ->attribute('class', 'alert-heading')
                . $value;
        }

        $this->value($value);

        return parent::__toString();
    }

}