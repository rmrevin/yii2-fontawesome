<?php
/**
 * FA.php
 * @author Revin Roman
 * @link http://phptime.ru
 */

namespace rmrevin\yii\fontawesome;

use yii\helpers\Html;

class FA
{

	public static function icon($name)
	{
		return Html::tag('i', ['class' => 'fa fa-' . $name]);
	}
}