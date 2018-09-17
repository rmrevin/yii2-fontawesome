<?php
/**
 * CdnFreeAssetBundle.php
 * @author Revin Roman
 * @link https://rmrevin.ru
 */

namespace rmrevin\yii\fontawesome;

/**
 * Class CdnFreeAssetBundle
 * @package rmrevin\yii\fontawesome
 */
class CdnFreeAssetBundle extends \yii\web\AssetBundle
{
    /**
     * @inherit
     */
    public $css = [
        'https://use.fontawesome.com/releases/v5.3.1/css/all.css',
    ];
}
