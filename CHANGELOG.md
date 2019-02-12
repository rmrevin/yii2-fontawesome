2019-02-12 - 3.3.0
------------------
* `Font Awesome` updated to version `5.7.1`.
* Added new size constants.

2018-09-17 - 3.2.0
------------------
* `Font Awesome` updated to version `5.3.1`.
* Add text stacking function.
* Refactoring of asset bundles.
* Remove bower-asset from `composer.json`
* These classes are now deprecated:
  * `rmrevin\yii\fontawesome\AssetBundle`
  * `rmrevin\yii\fontawesome\cdn\AssetBundle`
* Update readme.
* Update tests.

2018-07-11 - 3.1.0
------------------
* Remove static font awesome bundle and add composer `bower-asset/font-awesome`.
* `Font Awesome` updated to version `5.1`.

2018-04-01 - 3.0.0
-------------------
* `Font Awesome` updated to version `5.0`.
* These class are now deprecated:
  * `rmrevin\yii\fontawesome\FA` use `...\fontawesome\FAB`,  `...\fontawesome\FAL`,  `...\fontawesome\FAR`, `...\fontawesome\FAS`.  
* These deprecated properties and methods are now removed:
  * `rmrevin\yii\fontawesome\component\Icon::$defaultTag`
  * `rmrevin\yii\fontawesome\component\Icon::$tag`
  * `rmrevin\yii\fontawesome\component\Icon::tag()`
  * `rmrevin\yii\fontawesome\component\Icon::render()`
  * `rmrevin\yii\fontawesome\component\Stack::$defaultTag`
  * `rmrevin\yii\fontawesome\component\Stack::$tag`
  * `rmrevin\yii\fontawesome\component\Stack::tag()`
  * `rmrevin\yii\fontawesome\component\Stack::render()`
  * `rmrevin\yii\fontawesome\component\UnorderedList::$defaultTag`
  * `rmrevin\yii\fontawesome\component\UnorderedList::$tag`
  * `rmrevin\yii\fontawesome\component\UnorderedList::tag()`
  * `rmrevin\yii\fontawesome\component\UnorderedList::render()`
  * `rmrevin\yii\fontawesome\FA::getConstants()`

2017-01-11 - 2.17.1
-------------------
* Downgrade minimum php to `5.4`

2016-10-25 - 2.17.0
-------------------
* `Font Awesome` updated to version `4.7`.
* Update minimum php to `5.5`
* These deprecated classes are now removed:
  * `rmrevin\yii\fontawesome\CDNAssetBundle`
* These deprecated methods are now removed:
  * `rmrevin\yii\fontawesome\component\Icon::ul`
  * `rmrevin\yii\fontawesome\component\Icon::fixed_width`
  * `rmrevin\yii\fontawesome\component\Icon::pull_left`
  * `rmrevin\yii\fontawesome\component\Icon::pull_right`
* In method `rmrevin\yii\fontawesome\component\UnorderedList::item` changed interface (removed `$icon` param).
* These directories are now deprecated:
  * `./assets`
* These fields and methods are now deprecated:
  * `rmrevin\yii\fontawesome\component\Icon::$defaultTag`
  * `rmrevin\yii\fontawesome\component\Icon::$tag`
  * `rmrevin\yii\fontawesome\component\Icon::tag()`
  * `rmrevin\yii\fontawesome\component\Icon::render()`
  * `rmrevin\yii\fontawesome\component\Stack::$defaultTag`
  * `rmrevin\yii\fontawesome\component\Stack::$tag`
  * `rmrevin\yii\fontawesome\component\Stack::tag()`
  * `rmrevin\yii\fontawesome\component\Stack::render()`
  * `rmrevin\yii\fontawesome\component\UnorderedList::$defaultTag`
  * `rmrevin\yii\fontawesome\component\UnorderedList::$tag`
  * `rmrevin\yii\fontawesome\component\UnorderedList::tag()`
  * `rmrevin\yii\fontawesome\component\UnorderedList::render()`
* Refactoring class `rmrevin\yii\fontawesome\component\UnorderedList`.

2016-08-31 - 2.16.1
-------------------
* Fix options in li item.
* Update readme.

2016-08-31 - 2.16.0
-------------------
* Enh #22: Added FA:ul() method.
* Refactoring.

2016-08-19 - 2.15.2
-------------------
* Update icon name constants to version 4.6.3.

2016-05-29 - 2.15.1
-------------------
* Added option to skip the icon.
* Added option to change the order of icons in the stack.

2016-05-22 - 2.15.0
-------------------
* Remove bower package.

2016-04-16 - 2.14.0
-------------------
* `Font Awesome` updated to version `4.6`.

2015-11-26 - 2.13.0
-------------------
* `Font Awesome` updated to version `4.5`.

2015-11-20 - 2.12.2
-------------------
* Add shortcuts methods `i()` for `FA::icon()` and `FA::s()` for `FA::stack()`
* Update readme

2015-11-09 - 2.12.1
-------------------
* Variable `FA::$cssPrefix` transferred to the class `FontAwesome`.
* Refactoring.
* Update tests.

2015-08-15 - 2.12.0
-------------------
* `Font Awesome` updated to version `4.4`.

2015-06-29 - 2.11.0
-------------------
* Added the ability to change the tag for icons.

2015-06-23 - 2.10.3
-------------------
* Change `cnd` url to cloudflare.

2015-06-19 - 2.10.2
-------------------
* `CDNAssetBundle` is now deprecated. Use `rmrevin\yii\fontawesome\cdn\AssetBundle`.
* Refactoring.

2015-05-09 - 2.10.1
-------------------
* Fix bug in tests.

2015-05-09 - 2.10.0
-------------------
* Add CDN asset bundle `CDNAssetBundle`.
* Composer package `fortawesome/font-awesome` replaced on bower package `bower-asset/fontawesome`.
* Adding warning messages in deprecated methods.
* Add changelog.
* Refactoring.
* Update readme.

2015-04-28 - 2.9.2
------------------
* Method `icon()->fixed_width()` is deprecated. Use instead `icon()->fixedWidth()`.
* Method `icon()->pull_left()` is deprecated. Use instead `icon()->pullLeft()`.
* Method `icon()->pull_right()` is deprecated. Use instead `icon()->pullRight()`.
* Updated tests.

2015-04-08 - 2.9.1
------------------
* Fix asset bundle publish bug on windows.

2015-03-31 - 2.9.0
------------------
* In asset bundle added `init` method for filtering publising assets.

2015-03-17 - 2.8.2
------------------
* Refactoring.

2015-03-16 - 2.8.1
------------------
* Update readme.

2015-03-16 - 2.8.0
------------------
* In class `FA` add static property `cssPrefix` for customizing css class.
* Refactoring.
* Update readme.

2015-02-08 - 2.7.1
------------------
* Update travisCI config.

2015-01-26 - 2.7.0
------------------
* `Font Awesome` updated to version `4.3`.
* Update icons constants list.
* Update readme.

Until 2015-03-04
----------------
* Implementation of extension.
