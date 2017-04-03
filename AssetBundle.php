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
    public $sourcePath = '@vendor/fortawesome/font-awesome';

    /**
     * @inherit
     */
    public $css = [
        'css/font-awesome.min.css',
    ];
    
    /**
     * @inherit
     */
    public $publishOptions = [
            'only' => [
                "css/*",
                "fonts/*",
            ],
            'except' => [
                "less",
                "scss",
                "src",
            ],
    ];

 
}
