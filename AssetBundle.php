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

    /**
     * @inherit
     */
    public $sourcePath = '@vendor/fortawesome/font-awesome';

    /**
     * @inherit
     */
    public $css = [
        'css/font-awesome.min.css',
    ];
}