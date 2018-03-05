<?php
/**
 * AssetBundle.php
 * @author Revin Roman <roman@rmrevin.com>
 * @author Simon Karlen <simi.albi@gmail.com>
 * @link https://rmrevin.ru
 */

namespace rmrevin\yii\fontawesome\cdn;

/**
 * Class AssetBundle
 * @package rmrevin\yii\fontawesome
 */
class AssetBundle extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $js = [
        'https://use.fontawesome.com/releases/v5.0.8/js/all.js'
    ];
}
