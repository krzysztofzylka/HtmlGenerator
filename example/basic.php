<?php

use krzysztofzylka\HtmlGenerator\Html;

require('../vendor/autoload.php');

echo Html::tag('span', 'Custom tag')
    . Html::hr()
    . Html::br()
    . Html::hr()
    . Html::a('google', 'http://google.pl')
    . Html::hr()
    . Html::div('div!')
    . Html::hr()
    . Html::br()
    . Html::hr()
    . Html::blockquote('blockquote')
    . Html::hr()
    . Html::details('details')
    . Html::hr()
    . Html::pre('pre')
    . Html::hr()
    . Html::code('code')
    . Html::hr()
    . Html::img('https://dummyimage.com/200x200/000/fff')
    . Html::hr()
    . Html::progress()
    . Html::br()
    . Html::progress()->value(50);