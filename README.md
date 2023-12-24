# HtmlGenerator
Html generator in PHP

# Usage
## Static create tag
```php
echo \Krzysztofzylka\HtmlGenerator\HtmlGenerator::createTag('div')
```
or
```php
echo \Krzysztofzylka\HtmlGenerator\HtmlGenerator::createTag(
    'div',
    'content'
)
```
or
```php
echo \Krzysztofzylka\HtmlGenerator\HtmlGenerator::createTag(
    'div',
    'content',
    'classes
)
```
or
```php
echo \Krzysztofzylka\HtmlGenerator\HtmlGenerator::createTag(
    'div',
    'content',
    'classes',
    ['attributes' => 'value']
)
```
## Create tag
```php
echo new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div');
```
## Methods
### Set content
```php
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div'))
    ->setContent('content')
```
### Add attributes
```php
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div'))
    ->addAttributes(['id' => 'div-id', 'class' => 'classes'])
```
### Add attribute
```php
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div'))
    ->addAttribute('id', 'div-id')
```
### Get attribute
```php
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div'))
    ->getAttribute('id')
```
### Append string to attribute
```php
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div'))
    ->appendAttribute('class', 'next_class')
```
### Remove attribute
```php
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div'))
    ->removeAttribute('class')
```
### Add id attribute
```php
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div'))
    ->setId('div-id')
```
### Add name attribute
```php
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('input'))
    ->setName('input-name')
```
### Add class attribute
```php
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div'))
    ->setClass('class')
```