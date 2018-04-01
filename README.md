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
* [GutHub issues](https://github.com/rmrevin/yii2-fontawesome/issues)
* [Public chat](https://gitter.im/rmrevin/support)

Update to `3.0`
----------------

Be careful in version 3.0 deprecated methods were removed. More in the [changelog](https://github.com/rmrevin/yii2-fontawesome/blob/master/CHANGELOG.md).

Update to `2.17`
----------------

Be careful in version 2.17 deprecated methods were removed. More in the [changelog](https://github.com/rmrevin/yii2-fontawesome/blob/2.x/CHANGELOG.md).

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run

```bash
composer require "rmrevin/yii2-fontawesome:~3.0"
```

or add

```
"rmrevin/yii2-fontawesome": "~3.0",
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

### Class `FAB`, `FAL`, `FAR`, `FAS` or `FontAwesome`

* `static FAR::icon($name, $options=[])` - Creates an [`component\Icon`](#class-componenticon) that can be used to FontAwesome html icon
  * `$name` - name of icon in font awesome set.
  * `$options` - additional attributes for `i.fa` html tag.
* `static FAR::stack($name, $options=[])` - Creates an [`component\Stack`](#class-componentstack) that can be used to FontAwesome html icon
  * `$options` - additional attributes for `span.fa-stack` html tag.

### Class `component\Icon`

* `(string)$Icon` - render icon
* `$Icon->addCssClass($value)` - add to html tag css class in `$value`
  * `$value` - name of css class
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
  * `$value` - rotate value (variants: `FA::ROTATE_90`, `FA::ROTATE_180`, `FA::ROTATE_270`)
* `$Icon->flip($value)` - add to html tag css class with rotate
  * `$value` - flip value (variants: `FA::FLIP_HORIZONTAL`, `FA::FLIP_VERTICAL`)

### Class `component\Stack`

* `(string)$Stack` - render icon stack
* `$Stack->icon($icon, $options=[])` - set icon for stack
  * `$icon` - name of icon or `component\Icon` object
  * `$options` - additional attributes for icon html tag.
* `$Stack->icon($icon, $options=[])` - set background icon for stack
  * `$icon` - name of icon or `component\Icon` object
  * `$options` - additional attributes for icon html tag.

Helper examples
---------------

```php
use rmrevin\yii\fontawesome\FA;

// normal use
echo FAR::icon('home'); // <i class="far fa-home"></i>

// shortcut
echo FAR::i('home'); // <i class="far fa-home"></i>

// icon with additional attributes
echo FAR::icon(
    'arrow-left', 
    ['class' => 'big', 'data-role' => 'arrow']
); // <i class="big far fa-arrow-left" data-role="arrow"></i>

// icon in button
echo Html::submitButton(
    Yii::t('app', '{icon} Save', ['icon' => FAR::icon('check')])
); // <button type="submit"><i class="far fa-check"></i> Save</button>

// icon with additional methods
echo FAR::icon('cog')->inverse();    // <i class="far fa-cog fa-inverse"></i>
echo FAR::icon('cog')->spin();       // <i class="far fa-cog fa-spin"></i>
echo FAR::icon('cog')->fixedWidth(); // <i class="far fa-cog fa-fw"></i>
echo FAR::icon('cog')->li();         // <i class="far fa-cog fa-li"></i>
echo FAR::icon('cog')->border();     // <i class="far fa-cog fa-border"></i>
echo FAR::icon('cog')->pullLeft();   // <i class="far fa-cog pull-left"></i>
echo FAR::icon('cog')->pullRight();  // <i class="far fa-cog pull-right"></i>

// icon size
echo FAR::icon('cog')->size(FAR::SIZE_3X);
// values: FAR::SIZE_LARGE, FAR::SIZE_2X, FAR::SIZE_3X, FAR::SIZE_4X, FAR::SIZE_5X
// <i class="far fa-cog fa-size-3x"></i>

// icon rotate
echo FAR::icon('cog')->rotate(FAR::ROTATE_90); 
// values: FAR::ROTATE_90, FAR::ROTATE_180, FAR::ROTATE_180
// <i class="far fa-cog fa-rotate-90"></i>

// icon flip
echo FAR::icon('cog')->flip(FAR::FLIP_VERTICAL); 
// values: FAR::FLIP_HORIZONTAL, FAR::FLIP_VERTICAL
// <i class="far fa-cog fa-flip-vertical"></i>

// icon with multiple methods
echo FAR::icon('cog')
        ->spin()
        ->fixedWidth()
        ->pullLeft()
        ->size(FAR::SIZE_LARGE);
// <i class="far fa-cog fa-spin fa-fw pull-left fa-size-lg"></i>

// icons stack
echo FAR::stack()
        ->icon('twitter')
        ->on('square-o');
// <span class="fa-stack">
//   <i class="far fa-square-o fa-stack-2x"></i>
//   <i class="far fa-twitter fa-stack-1x"></i>
// </span>

// icons stack with additional attributes
echo FAR::stack(['data-role' => 'stacked-icon'])
     ->on(FAR::Icon('square')->inverse())
     ->icon(FAR::Icon('cog')->spin());
// <span class="fa-stack" data-role="stacked-icon">
//   <i class="far fa-square-o fa-inverse fa-stack-2x"></i>
//   <i class="far fa-cog fa-spin fa-stack-1x"></i>
// </span>

// unordered list icons 
echo FAR::ul(['data-role' => 'unordered-list'])
     ->item('Bullet item', ['icon' => 'circle'])
     ->item('Checked item', ['icon' => 'check']);
// <ul class="fa-ul" data-role="unordered-list">
//   <li><i class="far fa-circle fa-li"></i>Bullet item</li>
//   <li><i class="far fa-check fa-li"></i>Checked Item</li>
// </span>

// autocomplete icons name in IDE
echo FAR::icon(FAR::_COG);
echo FAR::icon(FAR::_DESKTOP);
echo FAR::stack()
     ->on(FAR::_CIRCLE_O)
     ->icon(FAR::_TWITTER);
```
