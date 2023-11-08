# HtmlGenerator
Html generator in PHP

# Usage
## Create empty tag
```php
echo new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div');
```
### Create div with contents
```php
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div'))
    ->setContent('Div content');
```

### Create div with contents and attributes
```php
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div'))
    ->addAttribute('class', 'div-class')
    ->setContent('Div content');
```
```php
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div'))
    ->addAttributes(['class' => 'div-class', ...])
    ->setContent('Div content');
```

### Remove attribute
```php
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div'))
    ->addAttribute('class', 'div-class')
    ->removeAttribute('class')
    ->setContent('Div content');
```

### append attribute text
```php
// <div class="div-class div-class-2">Div content</div>
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div'))
    ->addAttribute('class', 'div-class')
    ->appendAttribute('class', 'div-class-2')
    ->setContent('Div content');
```

### Predefined methods
```php
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('div'))
    ->setId('div-id')
    ->setContent('Div content');
```
```php
echo (new \Krzysztofzylka\HtmlGenerator\HtmlGenerator('input'))
    ->setName('input-name')
    ->setId('input-id');
```