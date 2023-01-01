<?php

namespace Krzysztofzylka\HtmlGenerator;

use Krzysztofzylka\HtmlGenerator\bootstrap\AlertTag;
use Krzysztofzylka\HtmlGenerator\bootstrap\enums\ThemeColor;

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
     * Bootstrap alerts
     * @param string $value
     * @param ThemeColor $themeColor
     * @return AlertTag
     */
    public static function bsAlert(string $value, ThemeColor $themeColor = ThemeColor::Primary) : AlertTag {
        return (new AlertTag('div'))
            ->value($value)
            ->attribute('class', 'alert alert-' . $themeColor->value)
            ->attribute('role', 'alert');
    }


}