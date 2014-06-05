<?php
/**
 * Icon.php
 * @author Revin Roman
 * @link http://phptime.ru
 */

namespace rmrevin\yii\fontawesome\FA;

use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FAException;
use yii\helpers\Html;

class Icon
{

	private $options = [];

	public function __construct($name, $options = [])
	{
		Html::addCssClass($options, 'fa fa-' . $name);

		$this->options = $options;
	}

	public function __toString()
	{
		return Html::tag('i', null, $this->options);
	}

	public function inverse()
	{
		return $this->addCssClass('fa-inverse');
	}

	public function spin()
	{
		return $this->addCssClass('fa-spin');
	}

	public function fixed_width()
	{
		return $this->addCssClass('fa-fw');
	}

	public function ul()
	{
		return $this->addCssClass('fa-ul');
	}

	public function li()
	{
		return $this->addCssClass('fa-li');
	}

	public function border()
	{
		return $this->addCssClass('fa-border');
	}

	public function pull_left()
	{
		return $this->addCssClass('pull-left');
	}

	public function pull_right()
	{
		return $this->addCssClass('pull-right');
	}

	public function size($value, $validate_value = true)
	{
		if ($validate_value === true && !in_array($value, [FA::SIZE_LARGE, FA::SIZE_2X, FA::SIZE_3X, FA::SIZE_4X, FA::SIZE_5X])) {
			throw new FAException(\Yii::t('app', 'FA::size() - invalid value. Use one of the constants: FA::SIZE_LARGE, FA::SIZE_2X, FA::SIZE_3X, FA::SIZE_4X, FA::SIZE_5X.'));
		}

		return $this->addCssClass('fa-' . $value);
	}

	public function rotate($value, $validate_value = true)
	{
		if ($validate_value === true && !in_array($value, [FA::ROTATE_90, FA::ROTATE_180, FA::ROTATE_180])) {
			throw new FAException(\Yii::t('app', 'FA::rotate() - invalid value. Use one of the constants: FA::ROTATE_90, FA::ROTATE_180, FA::ROTATE_180.'));
		}

		return $this->addCssClass('fa-rotate-' . $value);
	}

	public function flip($value, $validate_value = true)
	{
		if ($validate_value === true && !in_array($value, [FA::FLIP_HORIZONTAL, FA::FLIP_VERTICAL])) {
			throw new FAException(\Yii::t('app', 'FA::flip() - invalid value. Use one of the constants: FA::FLIP_HORIZONTAL, FA::FLIP_VERTICAL.'));
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