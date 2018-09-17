<?php
/**
 * NpmProAssetBundle.php
 * @author Revin Roman
 * @link https://rmrevin.ru
 */

namespace rmrevin\yii\fontawesome;

/**
 * Class NpmProAssetBundle
 * @package rmrevin\yii\fontawesome
 */
class NpmProAssetBundle extends \yii\web\AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@app/node_modules/@fortawesome/fontawesome-pro';

    /**
     * @inherit
     */
    public $css = [
        'css/all.min.css',
    ];

    /**
     * @inherit
     */
    public $publishOptions = [
        'only' => [
            'css/*',
            'webfonts/*',
        ],
    ];
}
