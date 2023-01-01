<?php

use Krzysztofzylka\HtmlGenerator\Html;

require('../vendor/autoload.php');

$create = Html::tag('span', 'Custom tag')
    . Html::br()
    . Html::a('google', 'http://google.pl')
    . Html::div('div!');

echo $create;