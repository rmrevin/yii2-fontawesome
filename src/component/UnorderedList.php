<?php
/**
 * UnorderedList.php
 * @author Revin Roman <roman@rmrevin.com>
 * @author Simon Karlen <simi.albi@gmail.com>
 * @link https://rmrevin.com
 */

namespace rmrevin\yii\fontawesome\component;

use rmrevin\yii\fontawesome\FA;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class UnorderedList
 * @package rmrevin\yii\fontawesome\component
 */
class UnorderedList
{
    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var array
     */
    protected $items = [];

    /**
     * @param array $options
     */
    public function __construct($options = [])
    {
        Html::addCssClass($options, FA::$cssPrefix . '-ul');

        $options['item'] = function ($item, $index) {
            return call_user_func($item, $index);
        };

        $this->options = $options;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return Html::ul($this->items, $this->options);
    }

    /**
     * @param string $label
     * @param array $options
     * @return static
     */
    public function item($label, $options = [])
    {
        $this->items[] = function () use ($label, $options) {
            $tag = ArrayHelper::remove($options, 'tag', 'li');

            $icon = ArrayHelper::remove($options, 'icon');
            $icon = empty($icon)
                ? null
                : (is_string($icon) ? (string)(new Icon($icon))->li() : $icon);

            $content = trim($icon . $label);

            return Html::tag($tag, $content, $options);
        };

        return $this;
    }
}
