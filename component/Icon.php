<?php
/**
 * Icon.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\fontawesome\component;

use rmrevin\yii\fontawesome\FA;
use yii\helpers\Html;

/**
 * Class Icon
 * @package rmrevin\yii\fontawesome\component
 */
class Icon
{

    /** @var array */
    private $options = [];

    /**
     * @param string $name
     * @param array $options
     */
    public function __construct($name, $options = [])
    {
        Html::addCssClass($options, FA::$cssPrefix . ' ' . FA::$cssPrefix . '-' . $name);

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
     * @return self
     */
    public function inverse()
    {
        return $this->addCssClass(FA::$cssPrefix . '-inverse');
    }

    /**
     * @return self
     */
    public function spin()
    {
        return $this->addCssClass(FA::$cssPrefix . '-spin');
    }

    /**
     * @return self
     */
    public function fixed_width()
    {
        return $this->addCssClass(FA::$cssPrefix . '-fw');
    }

    /**
     * @return self
     */
    public function ul()
    {
        return $this->addCssClass(FA::$cssPrefix . '-ul');
    }

    /**
     * @return self
     */
    public function li()
    {
        return $this->addCssClass(FA::$cssPrefix . '-li');
    }

    /**
     * @return self
     */
    public function border()
    {
        return $this->addCssClass(FA::$cssPrefix . '-border');
    }

    /**
     * @return self
     */
    public function pull_left()
    {
        return $this->addCssClass('pull-left');
    }

    /**
     * @return self
     */
    public function pull_right()
    {
        return $this->addCssClass('pull-right');
    }

    /**
     * @param string $value
     * @return self
     * @throws \yii\base\InvalidConfigException
     */
    public function size($value)
    {
        $this->_checkValue(
            $value,
            [FA::SIZE_LARGE, FA::SIZE_2X, FA::SIZE_3X, FA::SIZE_4X, FA::SIZE_5X],
            'FA::size() - invalid value. Use one of the constants: FA::SIZE_LARGE, FA::SIZE_2X, FA::SIZE_3X, FA::SIZE_4X, FA::SIZE_5X.'
        );

        return $this->addCssClass(FA::$cssPrefix . '-' . $value);
    }

    /**
     * @param string $value
     * @return self
     * @throws \yii\base\InvalidConfigException
     */
    public function rotate($value)
    {
        $this->_checkValue(
            $value,
            [FA::ROTATE_90, FA::ROTATE_180, FA::ROTATE_270],
            'FA::rotate() - invalid value. Use one of the constants: FA::ROTATE_90, FA::ROTATE_180, FA::ROTATE_270.'
        );

        return $this->addCssClass(FA::$cssPrefix . '-rotate-' . $value);
    }

    /**
     * @param string $value
     * @return self
     * @throws \yii\base\InvalidConfigException
     */
    public function flip($value)
    {
        $this->_checkValue(
            $value,
            [FA::FLIP_HORIZONTAL, FA::FLIP_VERTICAL],
            'FA::flip() - invalid value. Use one of the constants: FA::FLIP_HORIZONTAL, FA::FLIP_VERTICAL.'
        );

        return $this->addCssClass(FA::$cssPrefix . '-flip-' . $value);
    }

    /**
     * @param string $class
     * @return self
     */
    public function addCssClass($class)
    {
        Html::addCssClass($this->options, $class);

        return $this;
    }

    /**
     * @param mixed $needle
     * @param array $haystack
     * @param string $message
     * @throws \yii\base\InvalidConfigException
     */
    private function _checkValue($needle, $haystack, $message)
    {
        if (!in_array($needle, $haystack, true)) {
            throw new \yii\base\InvalidConfigException($message);
        }
    }

    /**
     * @return string
     */
    public function render()
    {
        return Html::tag('i', null, $this->options);
    }
}
