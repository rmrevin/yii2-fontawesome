Yii 2 [Font Awesome](http://fortawesome.github.io/Font-Awesome/) Asset Bundle
===============================

This extension provides a assets bundle with [Font Awesome](http://fortawesome.github.io/Font-Awesome/)
for [Yii framework 2.0](http://www.yiiframework.com/) applications and helper to use icons.

For license information check the [LICENSE](https://github.com/rmrevin/yii2-fontawesome/blob/master/LICENSE)-file.

[![License](https://poser.pugx.org/rmrevin/yii2-fontawesome/license.svg)](https://packagist.org/packages/rmrevin/yii2-fontawesome)
[![Latest Stable Version](https://poser.pugx.org/rmrevin/yii2-fontawesome/v/stable.svg)](https://packagist.org/packages/rmrevin/yii2-fontawesome)
[![Latest Unstable Version](https://poser.pugx.org/rmrevin/yii2-fontawesome/v/unstable.svg)](https://packagist.org/packages/rmrevin/yii2-fontawesome)
[![Total Downloads](https://poser.pugx.org/rmrevin/yii2-fontawesome/downloads.svg)](https://packagist.org/packages/rmrevin/yii2-fontawesome)

Code Status
-----------
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/rmrevin/yii2-fontawesome/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/rmrevin/yii2-fontawesome/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/rmrevin/yii2-fontawesome/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/rmrevin/yii2-fontawesome/?branch=master)
[![Travis CI Build Status](https://travis-ci.org/rmrevin/yii2-fontawesome.svg)](https://travis-ci.org/rmrevin/yii2-fontawesome)
[![Dependency Status](https://www.versioneye.com/user/projects/54119b799e16229fe00000da/badge.svg)](https://www.versioneye.com/user/projects/54119b799e16229fe00000da)

Support
-------
* [GitHub issues](https://github.com/rmrevin/yii2-fontawesome/issues)
* [Public chat](https://gitter.im/rmrevin/support)

Update to `2.17`
----------------

Be careful in version 2.17 deprecated methods were removed. More in the [changelog](https://github.com/rmrevin/yii2-fontawesome/blob/master/CHANGELOG.md).

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run

```bash
composer require "rmrevin/yii2-fontawesome:~2.17"
```

or add

```
"rmrevin/yii2-fontawesome": "~2.17",
```

to the `require` section of your `composer.json` file.

Usage
-----

In view

```php
rmrevin\yii\fontawesome\AssetBundle::register($this);

```

or as dependency in your main application asset bundle

```php
class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'rmrevin\yii\fontawesome\AssetBundle'
	];
}

```

Class reference
---------------

Namespace: `rmrevin\yii\fontawesome`;

### Class `FA` or `FontAwesome`
* `static FA::i($name, $options=[])` - Creates an [`component\Icon`](#class-componenticon-icon) that can be used to 
FontAwesome html icon (intelligent guess which style to use and fa 4 compatible)
  * `$name` - name of icon in font awesome set.
  * `$options` - additional attributes for `i.fa` html tag
* `static FA::icon($name, $options=[])` - Alias of `FA::i()`
* `static FA::regular($name, $options = [])` - Create a **regular** [`component\Icon`](#class-componenticon-icon)
* `static FA::solid($name, $options = [])`  - Create a **solid** [`component\Icon`](#class-componenticon-icon)
* `static FA::light($name, $options = [])` - Create a **light** [`component\Icon`](#class-componenticon-icon) (pro only)
* `static FA::brand($name, $options = [])` - Create a **brand** [`component\Icon`](#class-componenticon-icon)
* `static FA::stack($name, $options=[])` - Creates an [`component\Stack`](#class-componentstack-stack) that can be used to FontAwesome html icon
  * `$options` - additional attributes for `span.fa-stack` html tag.

### Class `component\Icon` (`$Icon`)

* `(string)$Icon` - render icon
* `$Icon->addCssClass($value)` - add to html tag css class in `$value`
  * `$value` - name of css class
* `$Icon->addTransformation($value)` - add [`fa-transformation`](https://fontawesome.com/how-to-use/svg-with-js#power-transforms)
  * `$value` - transformation value (e.g. `shrink-8`)
* `$Icon->addMask($value)` - add [`fa-mask`](https://fontawesome.com/how-to-use/svg-with-js#masking)
  * `$value` - mask icon (e.g. `fas fa-circle`)
* `$Icon->inverse()` - add to html tag css class `fa-inverse`
* `$Icon->spin()` - add to html tag css class `fa-spin`
* `$Icon->fixedWidth()` - add to html tag css class `fa-fw`
* `$Icon->ul()` - add to html tag css class `fa-ul`
* `$Icon->li()` - add to html tag css class `fa-li`
* `$Icon->border()` - add to html tag css class `fa-border`
* `$Icon->pullLeft()` - add to html tag css class `pull-left`
* `$Icon->pullRight()` - add to html tag css class `pull-right`
* `$Icon->size($value)` - add to html tag css class with size
  * `$value` - size value (variants: `FA::SIZE_LARGE`, `FA::SIZE_2X`, `FA::SIZE_3X`, `FA::SIZE_4X`, `FA::SIZE_5X`)
* `$Icon->rotate($value)` - add to html tag css class with rotate
  * `$value` - rotate value (between *-359* and *359*)
* `$Icon->flip($value)` - add to html tag css class with rotate
  * `$value` - flip value (variants: `FA::FLIP_HORIZONTAL`, `FA::FLIP_VERTICAL`)
* `$Icon->shrink($value)` - add **shrink transformation** to icon
  * `$value` - shrink value (numeric value, including decimals)
* `$Icon->grow($value)` - add **grow transformation** to icon
  * `$value` - grow value (numeric value, including decimals)
* `$Icon->up($value)` - add **move up transformation** to icon
  * `$value` - up value (numeric value, including decimals)
* `$Icon->right($value)` - add **move right transformation** to icon
  * `$value` - right value (numeric value, including decimals)
* `$Icon->down($value)` - add **move down transformation** to icon
  * `$value` - down value (numeric value, including decimals)
* `$Icon->left($value)` - add **move left transformation** to icon
  * `$value` - left value (numeric value, including decimals)

### Class `component\Stack` (`$Stack`)

* `(string)$Stack` - render icon stack
* `$Stack->render()` - DEPRECATED! render icon stack
* `$Stack->tag($value)` - DEPRECATED! set another html tag for icon stack (default `span`)
* `$Stack->icon($icon, $options=[])` - set icon for stack
  * `$icon` - name of icon or `component\Icon` object
  * `$options` - additional attributes for icon html tag.
* `$Stack->on($icon, $options=[])` - set background icon for stack
  * `$icon` - name of icon or `component\Icon` object
  * `$options` - additional attributes for icon html tag.

Helper examples
---------------

```php
use rmrevin\yii\fontawesome\FA;

// normal use
echo FA::icon('home'); // <i class="fa fa-home"></i>

// shortcut
echo FA::i('home'); // <i class="fa fa-home"></i>

// icon with additional attributes
echo FA::icon(
    'arrow-left', 
    ['class' => 'big', 'data-role' => 'arrow']
); // <i class="big fa fa-arrow-left" data-role="arrow"></i>

// icon in button
echo Html::submitButton(
    Yii::t('app', '{icon} Save', ['icon' => FA::icon('check')])
); // <button type="submit"><i class="fa fa-check"></i> Save</button>

// icon with additional methods
echo FA::icon('cog')->inverse();    // <i class="fa fa-cog fa-inverse"></i>
echo FA::icon('cog')->spin();       // <i class="fa fa-cog fa-spin"></i>
echo FA::icon('cog')->fixedWidth(); // <i class="fa fa-cog fa-fw"></i>
echo FA::icon('cog')->li();         // <i class="fa fa-cog fa-li"></i>
echo FA::icon('cog')->border();     // <i class="fa fa-cog fa-border"></i>
echo FA::icon('cog')->pullLeft();   // <i class="fa fa-cog pull-left"></i>
echo FA::icon('cog')->pullRight();  // <i class="fa fa-cog pull-right"></i>

// icon size
echo FA::icon('cog')->size(FA::SIZE_3X);
// values: FA::SIZE_LARGE, FA::SIZE_2X, FA::SIZE_3X, FA::SIZE_4X, FA::SIZE_5X
// <i class="fa fa-cog fa-size-3x"></i>

// icon rotate
echo FA::icon('cog')->rotate(FA::ROTATE_90); 
// values: FA::ROTATE_90, FA::ROTATE_180, FA::ROTATE_180
// <i class="fa fa-cog fa-rotate-90"></i>

// icon flip
echo FA::icon('cog')->flip(FA::FLIP_VERTICAL); 
// values: FA::FLIP_HORIZONTAL, FA::FLIP_VERTICAL
// <i class="fa fa-cog fa-flip-vertical"></i>

// icon with multiple methods
echo FA::icon('cog')
        ->spin()
        ->fixedWidth()
        ->pullLeft()
        ->size(FA::SIZE_LARGE);
// <i class="fa fa-cog fa-spin fa-fw pull-left fa-size-lg"></i>

// icons stack
echo FA::stack()
        ->icon('twitter')
        ->on('square-o');
// <span class="fa-stack">
//   <i class="fa fa-square-o fa-stack-2x"></i>
//   <i class="fa fa-twitter fa-stack-1x"></i>
// </span>

// icons stack with additional attributes
echo FA::stack(['data-role' => 'stacked-icon'])
     ->on(FA::Icon('square')->inverse())
     ->icon(FA::Icon('cog')->spin());
// <span class="fa-stack" data-role="stacked-icon">
//   <i class="fa fa-square-o fa-inverse fa-stack-2x"></i>
//   <i class="fa fa-cog fa-spin fa-stack-1x"></i>
// </span>

// unordered list icons 
echo FA::ul(['data-role' => 'unordered-list'])
     ->item('Bullet item', ['icon' => 'circle'])
     ->item('Checked item', ['icon' => 'check']);
// <ul class="fa-ul" data-role="unordered-list">
//   <li><i class="fa fa-circle fa-li"></i>Bullet item</li>
//   <li><i class="fa fa-check fa-li"></i>Checked Item</li>
// </span>

// autocomplete icons name in IDE
echo FA::icon(FA::_COG);
echo FA::icon(FA::_DESKTOP);
echo FA::stack()
     ->on(FA::_CIRCLE_O)
     ->icon(FA::_TWITTER);
```

### Set another prefix

```php
FA::$cssPrefix = 'awf';

echo FA::icon('home');
// <i class="awf awf-home"></i>
echo FA::icon('cog')->inverse();
// <i class="awf awf-cog awf-inverse"></i>
```