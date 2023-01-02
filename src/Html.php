<?php

namespace Krzysztofzylka\HtmlGenerator;

use krzysztofzylka\HtmlGenerator\html\DetailsTag;

class Html {

    /**
     * Create br
     * @return Tag
     */
    public static function br() : Tag {
        return new Tag('br');
    }

    /**
     * Create tag
     * @param string $tag
     * @param string $value
     * @return Tag
     */
    public static function tag(string $tag, string $value = '') : Tag {
        return (new Tag($tag))->value($value);
    }

    /**
     * Create div
     * @param string $value
     * @return Tag
     */
    public static function div(string $value) : Tag {
        return (new Tag('div'))->value($value);
    }

    /**
     * Create link
     * @param string $name
     * @param string $link
     * @return Tag
     */
    public static function a(string $name, string $link) : Tag {
        return (new Tag('a'))->value($name)->attribute('href', $link);
    }

    /**
     * Create blockquote
     * @param string $value
     * @return Tag
     */
    public static function blockquote(string $value) : Tag {
        return (new Tag('blockquote'))->value($value);
    }

    /**
     * Create details
     * @param string $value
     * @return DetailsTag
     */
    public static function details(string $value) : DetailsTag {
        return (new DetailsTag('detail'))->value($value);
    }


}