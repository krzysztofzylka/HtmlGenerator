# HtmlGenerator
Html generator in PHP

## Tag class
> Avaliable in all predefined class

### Create empty tag
```php
// <div></div>
echo new \krzysztofzylka\HtmlGenerator\Tag('div');
```

### Create div with contents
```php
// <div>Div contents</div>
echo new \krzysztofzylka\HtmlGenerator\Tag('div', 'Div contents');
```

### Create span with attribute
```php
$span = new \krzysztofzylka\HtmlGenerator\Tag('span', 'Span text');
$span->id('idSpan'); //change id attribute
$span->class('class1'); //add class1
$span->class('class2'); //add class2
$span->aria('disabled', 'true'); //add aria-disabled="true"
$span->value('change value!'); //replace contents
$span->role('role'); //set role

// <span id="idSpan" class="class1 class2" role="role" aria-disabled="true">change value!</span>
echo $span;
```

### Clear attribute
```php
$span = new \krzysztofzylka\HtmlGenerator\Tag('span', 'Span text');
$span->id('idSpan'); //change id attribute
$span->class('class1'); //add class1
$span->class('class2'); //add class2
$span->aria('disabled', 'true'); //add aria-disabled="true"
$span->value('change value!'); //replace contents
$span->role('role'); //set role

$span->clearAttribute('class'); //clear class attribute

// <span id="idSpan" role="role" aria-disabled="true">change value!</span>
echo $span;
```

### Custom attribute
```php
$span = new \krzysztofzylka\HtmlGenerator\Tag('span', 'Span text');


$span->attribute('test', 'value'); //change attribute

// <span test="value">Span text!</span>
echo $span;
```

### Change attribute and clear
```php
$span = new \krzysztofzylka\HtmlGenerator\Tag('span', 'Span text');
$span->id('idSpan'); //change id attribute
$span->class('class1'); //add class1
$span->class('class2'); //add class2
$span->aria('disabled', 'true'); //add aria-disabled="true"
$span->value('change value!'); //replace contents
$span->role('role'); //set role

$span->attribute('class', 'new_class', true); //change attribute

// <span id="idSpan" role="role" class="new_class" aria-disabled="true">change value!</span>
echo $span;
```

### Get value
```php
$span = new \krzysztofzylka\HtmlGenerator\Tag('span', 'Span text');

// Span text
echo $span->getValue();
```

### Get attribute
```php
$span = new \krzysztofzylka\HtmlGenerator\Tag('span', 'Span text');
$span->id('idSpan'); //change id attribute
$span->class('class1'); //add class1
$span->class('class2'); //add class2
$span->aria('disabled', 'true'); //add aria-disabled="true"
$span->value('change value!'); //replace contents
$span->role('role'); //set role

// true
echo $span->getAttribute('aria-disabled');
```

# Predefined html tags
> All methods return Tag class
## br
```php
use \krzysztofzylka\HtmlGenerator\Html;

echo Html::br();
```

## tag
```php
use \krzysztofzylka\HtmlGenerator\Html;

// Html::tag(string $tag, string $value = '')
echo Html::tag('tag', 'value');
```

## div
```php
use \krzysztofzylka\HtmlGenerator\Html;

// Html::div(string $value)
echo Html::div('div contents');
```

## a
```php
use \krzysztofzylka\HtmlGenerator\Html;

// Html::a(string $name, string $link) 
echo Html::a('name', '#');
```

## blockquote
```php
use \krzysztofzylka\HtmlGenerator\Html;

// Html::blockquote(string $value)
echo Html::blockquote('blockquote');
```

## details
> Coming soon


## pre
> Coming soon


## code
> Coming soon


## hr
> Coming soon


## img
> Coming soon


## progress
> Coming soon

## span
> Coming soon