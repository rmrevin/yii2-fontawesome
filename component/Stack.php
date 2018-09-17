<?php
/**
 * Stack.php
 * @author Revin Roman
 * @link https://rmrevin.ru
 */

namespace rmrevin\yii\fontawesome\component;

use rmrevin\yii\fontawesome\FontAwesome;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class Stack
 * @package rmrevin\yii\fontawesome\component
 */
class Stack
{
    /**
     * @var string
     */
    private $iconCssPrefix = 'fa';

    /**
     * @var array
     */
    private $options = [];

    /**
     * @var Icon
     */
    private $icon_front;

    /**
     * @var string
     */
    private $text_front = null;

    /**
     * @var Icon
     */
    private $icon_back;

    /**
     * @param string $iconCssPrefix
     * @param array $options
     */
    public function __construct($iconCssPrefix, $options = [])
    {
        $this->iconCssPrefix = $iconCssPrefix;

        Html::addCssClass($options, FontAwesome::$basePrefix . '-stack');

        $this->options = $options;
    }

    /**
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public function __toString()
    {
        $options = $this->options;

        $tag = ArrayHelper::remove($options, 'tag', 'span');

        $template = ArrayHelper::remove($options, 'template', '{back}{front}');

        $iconBack = $this->icon_back instanceof Icon
            ? $this->icon_back->addCssClass(FontAwesome::$basePrefix . '-stack-2x')
            : null;

        if ($this->text_front !== null) {
            $contentFront = $this->text_front;
        } else {
            $contentFront = $this->icon_front instanceof Icon
                ? $this->icon_front->addCssClass(FontAwesome::$basePrefix . '-stack-1x')
                : null;
        }

        $content = str_replace(['{back}', '{front}'], [$iconBack, $contentFront], $template);

        return Html::tag($tag, $content, $options);
    }

    /**
     * @param string|Icon $icon
     * @param array $options
     * @return \rmrevin\yii\fontawesome\component\Stack
     */
    public function icon($icon, $options = [])
    {
        if (is_string($icon)) {
            $icon = new Icon($this->iconCssPrefix, $icon, $options);
        }

        $this->icon_front = $icon;

        return $this;
    }

    /**
     * @param string $text
     * @param array $options
     * @return \rmrevin\yii\fontawesome\component\Stack
     */
    public function text($text = '', $options = [])
    {
        $tag = ArrayHelper::remove($options, 'tag', 'span');

        Html::addCssClass($options, FontAwesome::$basePrefix . '-stack-1x');

        $this->text_front = Html::tag($tag, $text, $options);

        return $this;
    }

    /**
     * @param string|Icon $icon
     * @param array $options
     * @return \rmrevin\yii\fontawesome\component\Stack
     */
    public function on($icon, $options = [])
    {
        if (is_string($icon)) {
            $icon = new Icon($this->iconCssPrefix, $icon, $options);
        }

        $this->icon_back = $icon;

        return $this;
    }
}
