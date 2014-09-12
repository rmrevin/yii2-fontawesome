<?php
/**
 * FontAwesome.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\fontawesome;

/**
 * Class FA
 * @package rmrevin\yii\fontawesome
 */
class FontAwesome
{

    /**
     * @param string $name
     * @param array $options
     * @return component\Icon
     */
    public static function icon($name, $options = [])
    {
        return new component\Icon($name, $options);
    }

    /**
     * @param array $options
     * @return component\Stack
     */
    public static function stack($options = [])
    {
        return new component\Stack($options);
    }

    /**
     * Size values
     * @see Icon::size
     */
    const SIZE_LARGE = 'lg';
    const SIZE_2X = '2x';
    const SIZE_3X = '3x';
    const SIZE_4X = '4x';
    const SIZE_5X = '5x';

    /**
     * Rotate values
     * @see Icon::rotate
     */
    const ROTATE_90 = 90;
    const ROTATE_180 = 180;
    const ROTATE_270 = 270;

    /**
     * Flip values
     * @see Icon::flip
     */
    const FLIP_HORIZONTAL = 'horizontal';
    const FLIP_VERTICAL = 'vertical';
}