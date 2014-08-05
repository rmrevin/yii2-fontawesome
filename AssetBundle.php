<?php
/**
 * AssetBundle.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\fontawesome;

/**
 * Class AssetBundle
 * @package rmrevin\yii\fontawesome
 */
class AssetBundle extends \yii\web\AssetBundle
{

	public $sourcePath = '@vendor/fortawesome/font-awesome';

	public $css = [
		'css/font-awesome.min.css',
	];
} 