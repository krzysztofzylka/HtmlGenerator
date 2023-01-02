<?php

namespace krzysztofzylka\HtmlGenerator\html;

use krzysztofzylka\HtmlGenerator\Tag;

class ImgTag extends Tag {

    private string $alt;

    /**
     * Set summary
     * @param string $alt
     * @return ImgTag
     */
    public function alt(string $alt) : self {
        $this->alt = $alt;

        return $this;
    }

    public function __toString(): string {
        if (isset($this->alt)) {
            $this->attribute('alt', $this->alt);
        }

        return parent::__toString();
    }

}