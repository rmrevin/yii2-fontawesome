Yii 2 Font Awesome Asset Bundle
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

Installation
------------

The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run

```bash
composer require "rmrevin/yii2-fontawesome:2.10.*"
```

or add

```
"rmrevin/yii2-fontawesome": "2.10.*",
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
		'\rmrevin\yii\fontawesome\AssetBundle'
	];
}

```

Helper
------

```php
use rmrevin\yii\fontawesome\FA;

echo FA::icon('home'); // <i class="fa fa-home"></i>
echo FA::icon(
    'arrow-left', 
    ['class' => 'big', 'data-role' => 'arrow']
); // <i class="big fa fa-arrow-left" data-role="arrow"></i>

echo Html::submitButton(
    Yii::t('app', '{icon} Save', ['icon' => FA::icon('check')])
); // <button type="submit"><i class="fa fa-check"></i> Save</button>

echo FA::icon('cog')->inverse();    // <i class="fa fa-cog fa-inverse"></i>
echo FA::icon('cog')->spin();       // <i class="fa fa-cog fa-spin"></i>
echo FA::icon('cog')->fixedWidth(); // <i class="fa fa-cog fa-fw"></i>
echo FA::icon('cog')->ul();         // <i class="fa fa-cog fa-ul"></i>
echo FA::icon('cog')->li();         // <i class="fa fa-cog fa-li"></i>
echo FA::icon('cog')->border();     // <i class="fa fa-cog fa-border"></i>
echo FA::icon('cog')->pullLeft();   // <i class="fa fa-cog pull-left"></i>
echo FA::icon('cog')->pullRight();  // <i class="fa fa-cog pull-right"></i>

echo FA::icon('cog')->size(FA::SIZE_3X);
// values: FA::SIZE_LARGE, FA::SIZE_2X, FA::SIZE_3X, FA::SIZE_4X, FA::SIZE_5X
// <i class="fa fa-cog fa-size-3x"></i>

echo FA::icon('cog')->rotate(FA::ROTATE_90); 
// values: FA::ROTATE_90, FA::ROTATE_180, FA::ROTATE_180
// <i class="fa fa-cog fa-rotate-90"></i>

echo FA::icon('cog')->flip(FA::FLIP_VERTICAL); 
// values: FA::FLIP_HORIZONTAL, FA::FLIP_VERTICAL
// <i class="fa fa-cog fa-flip-vertical"></i>

echo FA::icon('cog')
        ->spin()
        ->fixedWidth()
        ->pullLeft()
        ->size(FA::SIZE_LARGE);
// <i class="fa fa-cog fa-spin fa-fw pull-left fa-size-lg"></i>

echo FA::stack()
        ->icon('twitter')
        ->on('square-o');
// <span class="fa-stack">
//   <i class="fa fa-square-o fa-stack-2x"></i>
//   <i class="fa fa-twitter fa-stack-1x"></i>
// </span>

echo FA::stack(['data-role' => 'stacked-icon'])
     ->on((new FA\Icon('square'))->inverse())
     ->icon((new FA\Icon('cog'))->spin());
// <span class="fa-stack" data-role="stacked-icon">
//   <i class="fa fa-square-o fa-inverse fa-stack-2x"></i>
//   <i class="fa fa-cog fa-spin fa-stack-1x"></i>
// </span>

// autocomplete icons name in IDE
echo FA::icon(FA::_COG);
echo FA::icon(FA::_DESKTOP);
echo FA::stack()
     ->on((new FA\Icon(FA::_SQUARE))->inverse())
     ->icon((new FA\Icon(FA::_COG))->spin());
```

### Set another prefix

```php
FA::$cssPrefix = 'awf';

echo FA::icon('home');
// <i class="awf awf-home"></i>
echo FA::icon('cog')->inverse();
// <i class="awf awf-cog awf-inverse"></i>
```