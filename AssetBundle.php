<?php
/**
 * AssetBundle.php
 * @author Revin Roman
 * @link https://rmrevin.ru
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
    public $sourcePath = '@bower/font-awesome/web-fonts-with-css';

    /**
     * @inherit
     */
    public $css = [
        'css/fontawesome-all.css',
    ];

    /**
     * @inherit
     */
    public $publishOptions = [
        'only' => [
            "css/*",
            "webfonts/*",
        ],
        'except' => [
            "less",
            "scss",
        ],
    ];
}
