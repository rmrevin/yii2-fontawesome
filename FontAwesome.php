<?php
/**
 * FontAwesome.php
 * @author Revin Roman <roman@rmrevin.com>
 * @author Simon Karlen <simi.albi@gmail.com>
 * @link https://rmrevin.ru
 */

namespace rmrevin\yii\fontawesome;

use rmrevin\yii\fontawesome\component;

/**
 * Class FA
 * @package rmrevin\yii\fontawesome
 */
class FontAwesome
{
    /**
     * CSS class prefix
     * @var string
     */
    public static $cssPrefix = 'fa';

    /**
     * Creates an `Icon` component that can be used to FontAwesome html icon
     *
     * @param string $name
     * @param array $options
     * @return component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public static function icon($name, $options = [])
    {
        return new component\Icon($name, $options);
    }

    /**
     * Shortcut for `icon()` method
     * @see icon()
     *
     * @param string $name
     * @param array $options
     * @return component\Icon
     * @throws \yii\base\InvalidConfigException
     */
    public static function i($name, $options = [])
    {
        return static::icon($name, $options);
    }

    /**
     * Creates an `Stack` component that can be used to FontAwesome html icon
     *
     * @param array $options
     * @return component\Stack
     */
    public static function stack($options = [])
    {
        return new component\Stack($options);
    }

    /**
     * Shortcut for `stack()` method
     * @see stack()
     *
     * @param array $options
     * @return component\Stack
     */
    public static function s($options = [])
    {
        return static::stack($options);
    }

    /**
     * @param array $options
     * @return component\UnorderedList
     */
    public static function ul($options = [])
    {
        return new component\UnorderedList($options);
    }

    /**
     * Size values
     * @see component\Icon::size
     */
    const SIZE_XS = 'xs';
    const SIZE_SM = 'sm';
    const SIZE_LG = 'lg';
    const SIZE_2X = '2x';
    const SIZE_3X = '3x';
    const SIZE_4X = '4x';
    const SIZE_5X = '5x';
    const SIZE_6X = '6x';
    const SIZE_7X = '7x';
    const SIZE_8X = '8x';
    const SIZE_9X = '9x';
    const SIZE_10X = '10x';

    /**
     * Flip values
     * @see component\Icon::flip
     */
    const FLIP_HORIZONTAL = 'h';
    const FLIP_VERTICAL = 'v';
}
