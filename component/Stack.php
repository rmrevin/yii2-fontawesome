<?php
/**
 * Stack.php
 * @author Revin Roman <roman@rmrevin.com>
 * @author Simon Karlen <simi.albi@gmail.com>
 * @link https://rmrevin.ru
 */

namespace rmrevin\yii\fontawesome\component;

use rmrevin\yii\fontawesome\FA;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class Stack
 * @package rmrevin\yii\fontawesome\component
 */
class Stack
{
    /**
     * @var array
     */
    private $options = [];

    /**
     * @var Icon
     */
    private $icon_front;

    /**
     * @var Icon
     */
    private $icon_back;

    /**
     * @param array $options
     */
    public function __construct($options = [])
    {
        Html::addCssClass($options, [FA::$cssPrefix . '-layers', FA::$cssPrefix . '-fw']);

        $this->options = $options;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $options = $this->options;

        $tag = ArrayHelper::remove($options, 'tag', 'span');

        $template = ArrayHelper::remove($options, 'template', '{back}{front}');

        $icon_back = $this->icon_back instanceof Icon
            ? $this->icon_back
            : '';

        $icon_front = $this->icon_front instanceof Icon
            ? $this->icon_front
            : '';

        $content = str_replace(['{back}', '{front}'], [$icon_back, $icon_front], $template);

        return Html::tag($tag, $content, $options);
    }

    /**
     * @param string|Icon $icon
     * @param array $options
     * @return self
     * @throws \yii\base\InvalidConfigException
     */
    public function icon($icon, $options = [])
    {
        if (is_string($icon)) {
            $icon = new Icon($icon, $options);
        }

        $this->icon_front = $icon;

        return $this;
    }

    /**
     * @param string|Icon $icon
     * @param array $options
     * @return self
     * @throws \yii\base\InvalidConfigException
     */
    public function on($icon, $options = [])
    {
        if (is_string($icon)) {
            $icon = new Icon($icon, $options);
        }

        $this->icon_back = $icon;

        return $this;
    }
}
