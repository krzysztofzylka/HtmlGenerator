<?php

namespace krzysztofzylka\HtmlGenerator\html;

use krzysztofzylka\HtmlGenerator\Tag;

class ProgressTag extends Tag {

    public function __construct(string $tag) {
        parent::__construct($tag);

        $this->attribute('max', 100);
    }

    /**
     * Max
     * @param int $max
     * @return ProgressTag
     */
    public function max(int $max) : self {
        $this->attribute('max', $max, true);

        return $this;
    }

    /**
     * Value
     * @param string|int $value
     * @return ProgressTag
     */
    public function value(string|int $value) : self {
        $this->attribute('value', $value, true);

        return $this;
    }

}