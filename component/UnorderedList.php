<?php
/**
 * UnorderedList.php
 * @author Revin Roman
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
     * @deprecated
     * @var string
     */
    public static $defaultTag = 'ul';

    /**
     * @deprecated
     * @var string
     */
    private $tag;

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
        $this->items[] = function ($index) use ($label, $options) {
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

    /**
     * @deprecated
     * Change html tag.
     * @param string $tag
     * @return static
     * @throws \yii\base\InvalidParamException
     */
    public function tag($tag)
    {
        $this->tag = $tag;

        $this->options['tag'] = $tag;

        return $this;
    }

    /**
     * @deprecated
     * @param string|null $tag
     * @param array $options
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public function render($tag = null, $options = [])
    {
        $tag = empty($tag)
            ? (empty($this->tag) ? static::$defaultTag : $this->tag)
            : $tag;

        $options = array_merge($this->options, $options);

        $items = $this->items;

        return Html::tag($tag, implode($items), $options);
    }
}
