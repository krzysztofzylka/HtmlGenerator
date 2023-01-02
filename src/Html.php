<?php

namespace krzysztofzylka\HtmlGenerator;

use krzysztofzylka\HtmlGenerator\html\DetailsTag;
use krzysztofzylka\HtmlGenerator\html\ImgTag;
use krzysztofzylka\HtmlGenerator\html\ProgressTag;

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
        return (new DetailsTag('details'))->value($value);
    }

    /**
     * Pre
     * @param string $value
     * @return Tag
     */
    public static function pre(string $value) : Tag {
        return (new Tag('pre'))->value($value);
    }

    /**
     * Code
     * @param string $value
     * @return Tag
     */
    public static function code(string $value) : Tag {
        return (new Tag('code'))->value($value);
    }

    /**
     * hr
     * @return Tag
     */
    public static function hr() : Tag {
        return new Tag('hr');
    }

    /**
     * image
     * @param string $src
     * @return ImgTag
     */
    public static function img(string $src) : ImgTag {
        return (new ImgTag('img'))->attribute('src', $src);
    }

    /**
     * Progress
     * @return ProgressTag
     */
    public static function progress() : ProgressTag {
        return (new ProgressTag('progress'));
    }


}