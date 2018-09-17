Yii 2 [Font Awesome](http://fortawesome.github.io/Font-Awesome/) Asset Bundle
===============================

This extension provides a assets bundle with [Font Awesome](https://fontawesome.com/)
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

Fontawesome version
-------------------
| Version of font | Version of extension |
| ---:|:--- |
| 4.* | ~2.17 |
| 5.* | ~3.0 |

Update to `3.2`
---------------

Be careful in version 3.2 `rmrevin\yii\fontawesome\AssetBundle` package use cdn by default. More in the [changelog](https://github.com/rmrevin/yii2-fontawesome/blob/master/CHANGELOG.md).

Update to `3.0`
---------------

Be careful in version 3.0 deprecated methods were removed. More in the [changelog](https://github.com/rmrevin/yii2-fontawesome/blob/master/CHANGELOG.md).

Update to `2.17`
----------------

Be careful in version 2.17 deprecated methods were removed. More in the [changelog](https://github.com/rmrevin/yii2-fontawesome/blob/2.x/CHANGELOG.md).

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run

```bash
composer require "rmrevin/yii2-fontawesome:~3.2"
```

or add

```
"rmrevin/yii2-fontawesome": "~3.2",
```

to the `require` section of your `composer.json` file.

Usage with fa pro version
-------------------------

### CDN
Register your domain here - https://fontawesome.com/how-to-use/on-the-web/setup/getting-started

Add `CdnProAssetBundle` as depends of your app asset bundle:
```php
class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'rmrevin\yii\fontawesome\CdnProAssetBundle'
	];
}

```

Or inject `CdnProAssetBundle` in your view:

```php
rmrevin\yii\fontawesome\CdnProAssetBundle::register($this);
```

### NPM
Install npm package of font:
```
npm install @fortawesome/fontawesome-pro
```
or 
```
yarn add @fortawesome/fontawesome-pro
```

And add `NpmProAssetBundle` as depends of your app asset bundle:
```php
class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'rmrevin\yii\fontawesome\NpmProAssetBundle'
	];
}

```

Or inject `NpmProAssetBundle` in your view:

```php
rmrevin\yii\fontawesome\NpmProAssetBundle::register($this);
```

Usage with fa free version
-------------------------

### CDN
Add `CdnFreeAssetBundle` as depends of your app asset bundle:
```php
class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'rmrevin\yii\fontawesome\CdnFreeAssetBundle'
	];
}

```

Or inject `CdnFreeAssetBundle` in your view:

```php
rmrevin\yii\fontawesome\CdnFreeAssetBundle::register($this);
```

### NPM
Install npm package of font:
```
npm install @fortawesome/fontawesome-free
```
or 
```
yarn add @fortawesome/fontawesome-free
```

And add `NpmFreeAssetBundle` as depends of your app asset bundle:
```php
class AppAsset extends AssetBundle
{
	// ...

	public $depends = [
		// ...
		'rmrevin\yii\fontawesome\NpmFreeAssetBundle'
	];
}

```

Or inject `NpmFreeAssetBundle` in your view:

```php
rmrevin\yii\fontawesome\NpmFreeAssetBundle::register($this);
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
use rmrevin\yii\fontawesome\FAS;
// or (only in pro version https://fontawesome.com/pro)
// use rmrevin\yii\fontawesome\FAR;
// use rmrevin\yii\fontawesome\FAL;
// use rmrevin\yii\fontawesome\FAB;

// normal use
echo FAS::icon('home'); // <i class="fas fa-home"></i>

// shortcut
echo FAS::i('home'); // <i class="fas fa-home"></i>

// icon with additional attributes
echo FAS::icon(
    'arrow-left', 
    ['class' => 'big', 'data-role' => 'arrow']
); // <i class="big fas fa-arrow-left" data-role="arrow"></i>

// icon in button
echo Html::submitButton(
    Yii::t('app', '{icon} Save', ['icon' => FAS::icon('check')])
); // <button type="submit"><i class="fas fa-check"></i> Save</button>

// icon with additional methods
echo FAS::icon('cog')->inverse();    // <i class="fas fa-cog fa-inverse"></i>
echo FAS::icon('cog')->spin();       // <i class="fas fa-cog fa-spin"></i>
echo FAS::icon('cog')->fixedWidth(); // <i class="fas fa-cog fa-fw"></i>
echo FAS::icon('cog')->li();         // <i class="fas fa-cog fa-li"></i>
echo FAS::icon('cog')->border();     // <i class="fas fa-cog fa-border"></i>
echo FAS::icon('cog')->pullLeft();   // <i class="fas fa-cog pull-left"></i>
echo FAS::icon('cog')->pullRight();  // <i class="fas fa-cog pull-right"></i>

// icon size
echo FAS::icon('cog')->size(FAS::SIZE_3X);
// values: FAS::SIZE_LARGE, FAS::SIZE_2X, FAS::SIZE_3X, FAS::SIZE_4X, FAS::SIZE_5X
// <i class="fas fa-cog fa-size-3x"></i>

// icon rotate
echo FAS::icon('cog')->rotate(FAS::ROTATE_90); 
// values: FAS::ROTATE_90, FAS::ROTATE_180, FAS::ROTATE_180
// <i class="fas fa-cog fa-rotate-90"></i>

// icon flip
echo FAS::icon('cog')->flip(FAS::FLIP_VERTICAL); 
// values: FAS::FLIP_HORIZONTAL, FAS::FLIP_VERTICAL
// <i class="fas fa-cog fa-flip-vertical"></i>

// icon with multiple methods
echo FAS::icon('cog')
        ->spin()
        ->fixedWidth()
        ->pullLeft()
        ->size(FAS::SIZE_LARGE);
// <i class="fas fa-cog fa-spin fa-fw pull-left fa-size-lg"></i>

// icons stack
echo FAS::stack()
        ->icon('twitter')
        ->on('square-o');
// <span class="fa-stack">
//   <i class="fas fa-square-o fa-stack-2x"></i>
//   <i class="fas fa-twitter fa-stack-1x"></i>
// </span>

// icons stack with additional attributes
echo FAS::stack(['data-role' => 'stacked-icon'])
     ->on(FAS::Icon('square')->inverse())
     ->icon(FAS::Icon('cog')->spin());
// <span class="fa-stack" data-role="stacked-icon">
//   <i class="fas fa-square-o fa-inverse fa-stack-2x"></i>
//   <i class="fas fa-cog fa-spin fa-stack-1x"></i>
// </span>

// Stacking text and icons
echo FAS::stack()
     ->on(FAS::Icon('square'))
     ->text('1');
// <span class="fa-stack">
//   <i class="fas fa-square fa-stack-2x"></i>
//   <span class="fa-stack-1x">1</span>
// </span>

// Stacking text and icons with options
echo FAS::stack()
     ->on(FAS::Icon('square'))
     ->text('1', ['tag'=>'strong', 'class'=>'stacked-text']);
// <span class="fa-stack">
//   <i class="fas fa-square fa-stack-2x"></i>
//   <strong class="stacked-text fa-stack-1x">1</strong>
// </span>
// Now you can add some css for vertical text positioning:
.stacked-text { margin-top: .3em; }

// unordered list icons 
echo FAS::ul(['data-role' => 'unordered-list'])
     ->item('Bullet item', ['icon' => 'circle'])
     ->item('Checked item', ['icon' => 'check']);
// <ul class="fa-ul" data-role="unordered-list">
//   <li><i class="fas fa-circle fa-li"></i>Bullet item</li>
//   <li><i class="fas fa-check fa-li"></i>Checked Item</li>
// </span>

// autocomplete icons name in IDE
echo FAS::icon(FAS::_COG);
echo FAS::icon(FAS::_DESKTOP);
echo FAS::stack()
     ->on(FAS::_CIRCLE_O)
     ->icon(FAS::_TWITTER);
```
