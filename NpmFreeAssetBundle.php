<?php
/**
 * NpmFreeAssetBundle.php
 * @author Revin Roman
 * @link https://rmrevin.ru
 */

namespace rmrevin\yii\fontawesome;

/**
 * Class NpmFreeAssetBundle
 * @package rmrevin\yii\fontawesome
 */
class NpmFreeAssetBundle extends \yii\web\AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@app/node_modules/@fortawesome/fontawesome-free';

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
