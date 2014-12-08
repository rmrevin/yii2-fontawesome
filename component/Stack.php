<?php
/**
 * Stack.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\fontawesome\component;

/**
 * Class Stack
 * @package rmrevin\yii\fontawesome\component
 */
class Stack
{

    /** @var array */
    private $options = [];

    /** @var Icon */
    private $icon_front;

    /** @var Icon */
    private $icon_back;

    /**
     * @param array $options
     */
    public function __construct($options = [])
    {
        \yii\helpers\Html::addCssClass($options, 'fa-stack');

        $this->options = $options;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * @param string|Icon $icon
     * @param array $options
     * @return self
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
     */
    public function on($icon, $options = [])
    {
        if (is_string($icon)) {
            $icon = new Icon($icon, $options);
        }

        $this->icon_back = $icon;

        return $this;
    }

    /**
     * @return string
     */
    public function render()
    {
        $icon_back = $this->icon_back instanceof Icon
            ? $this->icon_back->addCssClass('fa-stack-2x')
            : null;

        $icon_front = $this->icon_front instanceof Icon
            ? $this->icon_front->addCssClass('fa-stack-1x')
            : null;

        return \yii\helpers\Html::tag(
            'span',
            $icon_back . $icon_front,
            $this->options
        );
    }
}