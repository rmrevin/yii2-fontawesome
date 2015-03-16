Yii 2 Font Awesome Asset Bundle
===============================
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
Add in `composer.json`:
```
{
    "require": {
        "rmrevin/yii2-fontawesome": "2.8.*"
    }
}
```

Usage
-----
In view
```php
<?
// ...

rmrevin\yii\fontawesome\AssetBundle::register($this);

```

or as dependency in your asset bundle
```php
<?
// ...

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

echo FA::icon('home');
// <i class="fa fa-home"></i>
echo FA::icon('arrow-left', ['class' => 'big', 'data-role' => 'arrow']);
// <i class="big fa fa-arrow-left" data-role="arrow"></i>
echo Html::submitButton(Yii::t('app', '{check} Save', ['check' => FA::icon('check')]));
// <button type="submit"><i class="fa fa-check"></i> Save</button>

echo FA::icon('cog')->inverse();
// <i class="fa fa-cog fa-inverse"></i>
echo FA::icon('cog')->spin();
// <i class="fa fa-cog fa-spin"></i>
echo FA::icon('cog')->fixed_width();
// <i class="fa fa-cog fa-fw"></i>
echo FA::icon('cog')->ul();
// <i class="fa fa-cog fa-ul"></i>
echo FA::icon('cog')->li();
// <i class="fa fa-cog fa-li"></i>
echo FA::icon('cog')->border();
// <i class="fa fa-cog fa-border"></i>
echo FA::icon('cog')->pull_left();
// <i class="fa fa-cog fa-pull_left"></i>
echo FA::icon('cog')->pull_right();
// <i class="fa fa-cog fa-pull_right"></i>
echo FA::icon('cog')->size(FA::SIZE_3X); // values: FA::SIZE_LARGE, FA::SIZE_2X, FA::SIZE_3X, FA::SIZE_4X, FA::SIZE_5X
// <i class="fa fa-cog fa-size-3x"></i>
echo FA::icon('cog')->rotate(FA::ROTATE_90); // values: FA::ROTATE_90, FA::ROTATE_180, FA::ROTATE_180
// <i class="fa fa-cog fa-rotate-90"></i>
echo FA::icon('cog')->flip(FA::FLIP_VERTICAL); // values: FA::FLIP_HORIZONTAL, FA::FLIP_VERTICAL
// <i class="fa fa-cog fa-flip-vertical"></i>

echo FA::icon('cog')->spin()->fixed_width()->pull_left()->size(FA::SIZE_LARGE);
// <i class="fa fa-cog fa-spin fa-fw pull-left fa-size-lg"></i>

echo FA::stack()->icon('twitter')->on('square-o');
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

// autocomplete in IDE
echo FA::icon(FA::_COG);
echo FA::icon(FA::_DESKTOP);
echo FA::stack(['data-role' => 'stacked-icon'])
     ->on((new FA\Icon(FA::_SQUARE))->inverse())
     ->icon((new FA\Icon(FA::_COG))->spin());
```

### Another prefix
```php
FA::$cssPrefix = 'awf';

echo FA::icon('home');
// <i class="awf awf-home"></i>
echo FA::icon('cog')->inverse();
// <i class="awf awf-cog awf-inverse"></i>
```