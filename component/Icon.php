<?php
/**
 * Icon.php
 * @author Revin Roman
 * @link https://rmrevin.ru
 */

namespace rmrevin\yii\fontawesome\component;

use rmrevin\yii\fontawesome\FontAwesome;
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
     * @param string $cssPrefix
     * @param string $name
     * @param array $options
     */
    public function __construct($cssPrefix, $name, $options = [])
    {
        Html::addCssClass($options, $cssPrefix);

        if (!empty($name)) {
            Html::addCssClass($options, FontAwesome::$basePrefix . '-' . $name);
        }

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
     * @return \rmrevin\yii\fontawesome\component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public function inverse()
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-inverse');
    }

    /**
     * @return \rmrevin\yii\fontawesome\component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public function spin()
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-spin');
    }

    /**
     * @return \rmrevin\yii\fontawesome\component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public function pulse()
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-pulse');
    }

    /**
     * @return \rmrevin\yii\fontawesome\component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public function fixedWidth()
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-fw');
    }

    /**
     * @return \rmrevin\yii\fontawesome\component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public function li()
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-li');
    }

    /**
     * @return \rmrevin\yii\fontawesome\component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public function border()
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-border');
    }

    /**
     * @return \rmrevin\yii\fontawesome\component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public function pullLeft()
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-pull-left');
    }

    /**
     * @return \rmrevin\yii\fontawesome\component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public function pullRight()
    {
        return $this->addCssClass(FontAwesome::$basePrefix . '-pull-right');
    }

    /**
     * @param string $value
     * @return \rmrevin\yii\fontawesome\component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public function size($value)
    {
        $values = [
            FontAwesome::SIZE_LG,
            FontAwesome::SIZE_SM,
            FontAwesome::SIZE_XS,
            FontAwesome::SIZE_2X,
            FontAwesome::SIZE_3X,
            FontAwesome::SIZE_4X,
            FontAwesome::SIZE_5X,
            FontAwesome::SIZE_6X,
            FontAwesome::SIZE_7X,
            FontAwesome::SIZE_8X,
            FontAwesome::SIZE_9X,
            FontAwesome::SIZE_10X,
        ];

        return $this->addCssClass(
            FontAwesome::$basePrefix . '-' . $value,
            in_array((string)$value, $values, true),
            sprintf(
                '%s - invalid value. Use one of the constants: %s.',
                'FontAwesome::size()',
                implode(', ', $values)
            )
        );
    }

    /**
     * @param string $value
     * @return \rmrevin\yii\fontawesome\component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public function rotate($value)
    {
        $values = [FontAwesome::ROTATE_90, FontAwesome::ROTATE_180, FontAwesome::ROTATE_270];

        return $this->addCssClass(
            FontAwesome::$basePrefix . '-rotate-' . $value,
            in_array((string)$value, $values, true),
            sprintf(
                '%s - invalid value. Use one of the constants: %s.',
                'FontAwesome::rotate()',
                implode(', ', $values)
            )
        );
    }

    /**
     * @param string $value
     * @return \rmrevin\yii\fontawesome\component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public function flip($value)
    {
        $values = [FontAwesome::FLIP_HORIZONTAL, FontAwesome::FLIP_VERTICAL];

        return $this->addCssClass(
            FontAwesome::$basePrefix . '-flip-' . $value,
            in_array((string)$value, [FontAwesome::FLIP_HORIZONTAL, FontAwesome::FLIP_VERTICAL], true),
            sprintf(
                '%s - invalid value. Use one of the constants: %s.',
                'FontAwesome::flip()',
                implode(', ', $values)
            )
        );
    }

    /**
     * @param string $class
     * @param bool $condition
     * @param string|bool $throw
     * @return \rmrevin\yii\fontawesome\component\Icon
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

                throw new InvalidConfigException($message);
            }
        } else {
            Html::addCssClass($this->options, $class);
        }

        return $this;
    }
}
