Yii 2 Font Awesome Asset Bundle
===============================

Installation
------------
Add in `composer.json`:
```
{
    "require": {
        "rmrevin/yii2-fontawesome": "1.1.*"
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

od as dependency in your asset bundle
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

```