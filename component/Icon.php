<?php
/**
 * Icon.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\fontawesome\component;

use rmrevin\yii\fontawesome\Exception;
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
        Html::addCssClass($options, 'fa fa-' . $name);

        $this->options = $options;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return Html::tag('i', null, $this->options);
    }

    /**
     * @return self
     */
    public function inverse()
    {
        return $this->addCssClass('fa-inverse');
    }

    /**
     * @return self
     */
    public function spin()
    {
        return $this->addCssClass('fa-spin');
    }

    /**
     * @return self
     */
    public function fixed_width()
    {
        return $this->addCssClass('fa-fw');
    }

    /**
     * @return self
     */
    public function ul()
    {
        return $this->addCssClass('fa-ul');
    }

    /**
     * @return self
     */
    public function li()
    {
        return $this->addCssClass('fa-li');
    }

    /**
     * @return self
     */
    public function border()
    {
        return $this->addCssClass('fa-border');
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
     * @param bool $validate_value
     * @return self
     * @throws \rmrevin\yii\fontawesome\Exception
     */
    public function size($value, $validate_value = true)
    {
        if ($validate_value === true && !in_array(
                $value,
                [FA::SIZE_LARGE, FA::SIZE_2X, FA::SIZE_3X, FA::SIZE_4X, FA::SIZE_5X]
            )
        ) {
            throw new Exception('FA::size() - invalid value. Use one of the constants: FA::SIZE_LARGE, FA::SIZE_2X, FA::SIZE_3X, FA::SIZE_4X, FA::SIZE_5X.');
        }

        return $this->addCssClass('fa-' . $value);
    }

    /**
     * @param string $value
     * @param bool $validate_value
     * @return self
     * @throws \rmrevin\yii\fontawesome\Exception
     */
    public function rotate($value, $validate_value = true)
    {
        if ($validate_value === true && !in_array($value, [FA::ROTATE_90, FA::ROTATE_180, FA::ROTATE_270])) {
            throw new Exception('FA::rotate() - invalid value. Use one of the constants: FA::ROTATE_90, FA::ROTATE_180, FA::ROTATE_270.');
        }

        return $this->addCssClass('fa-rotate-' . $value);
    }

    /**
     * @param string $value
     * @param bool $validate_value
     * @return self
     * @throws \rmrevin\yii\fontawesome\Exception
     */
    public function flip($value, $validate_value = true)
    {
        if ($validate_value === true && !in_array($value, [FA::FLIP_HORIZONTAL, FA::FLIP_VERTICAL])) {
            throw new Exception('FA::flip() - invalid value. Use one of the constants: FA::FLIP_HORIZONTAL, FA::FLIP_VERTICAL.');
        }

        return $this->addCssClass('fa-flip-' . $value);
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
} 