<?php
/**
 * Icon.php
 * @author Revin Roman <roman@rmrevin.com>
 * @author Simon Karlen <simi.albi@gmail.com>
 * @link https://rmrevin.ru
 */

namespace rmrevin\yii\fontawesome\component;

use rmrevin\yii\fontawesome\FA;
use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class Icon
 * @package rmrevin\yii\fontawesome\component
 */
class Icon
{
    /**
     * @var array
     */
    private $options = [];

    /**
     * @var string
     */
    private $prefix = 'fas';

    /**
     * @param string $name
     * @param array $options
     * @param string $prefix
     * @throws InvalidConfigException
     */
    public function __construct($name, $options = [], $prefix = 'fas')
    {
        if (empty($name)) {
            throw new InvalidConfigException('property is mandatory');
        }

        Html::addCssClass($options, $prefix . ' ' . FA::$cssPrefix . '-' . $name);

        $this->prefix = $prefix;
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $options = $this->options;

        $tag = ArrayHelper::remove($options, 'tag', 'i');

        return Html::tag($tag, null, $options);
    }

    /**
     * @return static
     * @throws InvalidConfigException
     */
    public function inverse()
    {
        return $this->addCssClass(FA::$cssPrefix . '-inverse');
    }

    /**
     * @return static
     * @throws InvalidConfigException
     */
    public function spin()
    {
        return $this->addCssClass(FA::$cssPrefix . '-spin');
    }

    /**
     * @return static
     * @throws InvalidConfigException
     */
    public function pulse()
    {
        return $this->addCssClass(FA::$cssPrefix . '-pulse');
    }

    /**
     * @return static
     * @throws InvalidConfigException
     */
    public function fixedWidth()
    {
        return $this->addCssClass(FA::$cssPrefix . '-fw');
    }

    /**
     * @return static
     * @throws InvalidConfigException
     */
    public function li()
    {
        return $this->addCssClass(FA::$cssPrefix . '-li');
    }

    /**
     * @return static
     * @throws InvalidConfigException
     */
    public function border()
    {
        return $this->addCssClass(FA::$cssPrefix . '-border');
    }

    /**
     * @return static
     * @throws InvalidConfigException
     */
    public function pullLeft()
    {
        return $this->addCssClass(FA::$cssPrefix . '-pull-left');
    }

    /**
     * @return static
     * @throws InvalidConfigException
     */
    public function pullRight()
    {
        return $this->addCssClass(FA::$cssPrefix . '-pull-right');
    }

    /**
     * @param string $value
     * @return static
     * @throws \yii\base\InvalidConfigException
     */
    public function size($value)
    {
        return $this->addCssClass(
            FA::$cssPrefix . '-' . $value,
            in_array((string)$value, [
                FA::SIZE_XS,
                FA::SIZE_SM,
                FA::SIZE_LG,
                FA::SIZE_2X,
                FA::SIZE_3X,
                FA::SIZE_4X,
                FA::SIZE_5X,
                FA::SIZE_6X,
                FA::SIZE_7X,
                FA::SIZE_8X,
                FA::SIZE_9X,
                FA::SIZE_10X
            ], true),
            sprintf(
                '%s - invalid value. Use one of the constants: %s.',
                'FA::size()',
                'FA::SIZE_XS, FA::SIZE_SM, FA::SIZE_LG, FA::SIZE_2X, FA::SIZE_3X, FA::SIZE_4X, FA::SIZE_5X, FA::SIZE_6X, FA::SIZE_7X, FA::SIZE_8X, FA::SIZE_9X, FA::SIZE_10X'
            )
        );
    }

    /**
     * @param string $value
     * @return static
     * @throws \yii\base\InvalidConfigException
     */
    public function rotate($value)
    {
        return $this->addTransformation(
            'rotate-' . $value,
            in_array((int)$value, range(-359, 359), true),
            sprintf(
                '%s - invalid value. Must be in range: %s.',
                'FA::rotate()',
                '-359 through 359'
            )
        );
    }

    /**
     * @param string $value
     * @return static
     * @throws \yii\base\InvalidConfigException
     */
    public function flip($value)
    {
        return $this->addTransformation(
            'flip-' . $value,
            in_array((string)$value, [FA::FLIP_HORIZONTAL, FA::FLIP_VERTICAL], true),
            sprintf(
                '%s - invalid value. Use one of the constants: %s.',
                'FA::flip()',
                'FA::FLIP_HORIZONTAL, FA::FLIP_VERTICAL'
            )
        );
    }

    /**
     * @param integer $value
     * @return static
     * @throws \yii\base\InvalidConfigException
     */
    public function shrink($value)
    {
        return $this->addTransformation(
            'shrink-' . $value,
            is_numeric($value),
            sprintf(
                '%s - invalid value. Must be numeric.',
                'FA::shrink()'
            )
        );
    }

    /**
     * @param integer $value
     * @return static
     * @throws \yii\base\InvalidConfigException
     */
    public function grow($value)
    {
        return $this->addTransformation(
            'grow-' . $value,
            is_numeric($value),
            sprintf(
                '%s - invalid value. Must be numeric.',
                'FA::shrink()'
            )
        );
    }

    /**
     * @param integer $value
     * @return static
     * @throws \yii\base\InvalidConfigException
     */
    public function up($value)
    {
        return $this->addTransformation(
            'up-' . $value,
            is_numeric($value),
            sprintf(
                '%s - invalid value. Must be numeric.',
                'FA::shrink()'
            )
        );
    }

    /**
     * @param integer $value
     * @return static
     * @throws \yii\base\InvalidConfigException
     */
    public function right($value)
    {
        return $this->addTransformation(
            'right-' . $value,
            is_numeric($value),
            sprintf(
                '%s - invalid value. Must be numeric.',
                'FA::shrink()'
            )
        );
    }

    /**
     * @param integer $value
     * @return static
     * @throws \yii\base\InvalidConfigException
     */
    public function down($value)
    {
        return $this->addTransformation(
            'down-' . $value,
            is_numeric($value),
            sprintf(
                '%s - invalid value. Must be numeric.',
                'FA::shrink()'
            )
        );
    }

    /**
     * @param integer $value
     * @return static
     * @throws \yii\base\InvalidConfigException
     */
    public function left($value)
    {
        return $this->addTransformation(
            'left-' . $value,
            is_numeric($value),
            sprintf(
                '%s - invalid value. Must be numeric.',
                'FA::shrink()'
            )
        );
    }

    /**
     * @param $value
     * @return static
     * @throws InvalidConfigException
     */
    public function mask($value)
    {
        return $this->addMask($value, !empty($value), false);
    }

    /**
     * @param string $class
     * @param bool $condition
     * @param string|bool $throw
     * @return static
     * @throws \yii\base\InvalidConfigException
     * @codeCoverageIgnore
     */
    public function addCssClass($class, $condition = true, $throw = false)
    {
        if ($condition === false) {
            if (!empty($throw)) {
                $message = !is_string($throw)
                    ? 'Condition is false'
                    : $throw;

                throw new \yii\base\InvalidConfigException($message);
            }
        } else {
            Html::addCssClass($this->options, $class);
        }

        return $this;
    }

    /**
     * @param string $transformation
     * @param bool $condition
     * @param string|bool $throw
     * @return static
     * @throws \yii\base\InvalidConfigException
     * @codeCoverageIgnore
     */
    public function addTransformation($transformation, $condition = true, $throw = false)
    {
        if ($condition === false) {
            if (!empty($throw)) {
                $message = !is_string($throw)
                    ? 'Condition is false'
                    : $throw;

                throw new \yii\base\InvalidConfigException($message);
            }
        } else {
            $transformations = ArrayHelper::getValue($this->options, ['data', FA::$cssPrefix . '-transform'], []);
            if (!ArrayHelper::isIn($transformation, $transformations)) {
                $transformations[] = $transformation;
            }

            ArrayHelper::setValue($this->options, ['data', FA::$cssPrefix . '-transform'], $transformations);
        }

        return $this;
    }

    /**
     * @param string $maskIcon
     * @param bool $condition
     * @param string|bool $throw
     * @return static
     * @throws \yii\base\InvalidConfigException
     * @codeCoverageIgnore
     */
    public function addMask($maskIcon, $condition = true, $throw = false)
    {
        if ($condition === false) {
            if (!empty($throw)) {
                $message = !is_string($throw)
                    ? 'Condition is false'
                    : $throw;

                throw new \yii\base\InvalidConfigException($message);
            }
        } else {
            ArrayHelper::setValue($this->options, ['data', FA::$cssPrefix . '-mask'],
                FA::i($maskIcon)->options['class']);
        }

        return $this;
    }
}
