<?php
/**
 * CDNAssetBundle.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\fontawesome;

/**
 * Class CDNAssetBundle
 * @package rmrevin\yii\fontawesome
 */
class CDNAssetBundle extends \yii\web\AssetBundle
{

    /**
     * @inherit
     */
    public $css = [
        '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css',
    ];
}