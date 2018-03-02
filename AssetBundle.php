<?php
/**
 * AssetBundle.php
 * @author Revin Roman <roman@rmrevin.com>
 * @author Simon Karlen <simi.albi@gmail.com>
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
     * @inheritdoc
     */
    public $sourcePath = '@vendor/fortawesome/font-awesome';

    /**
     * @inheritdoc
     */
    public $js = [
        'svg-with-js/js/fontawesome-all.min.js'
    ];

    /**
     * @inheritdoc
     */
    public $publishOptions = [
        'only' => [
            'svg-with-js/*'
        ],
        'except' => [
            '.github',
            'advanced-options',
            'use-on-desktop',
            'web-fonts-with-css'
        ]
    ];


}
