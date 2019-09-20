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
    public $sourcePath = '@app/node_modules/@fortawesome/fontawesome-pro';

    public $css = [
        'css/all.min.css',
    ];

    public $publishOptions = [
        'only' => [
            'css/*',
            'js/*',
            'webfonts/*',
            'sprites/*',
            'svgs/*',
        ],
    ];
}
