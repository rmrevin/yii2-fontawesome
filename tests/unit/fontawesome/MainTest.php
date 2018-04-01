<?php
/**
 * MainTest.php
 * @author Revin Roman
 * @link https://rmrevin.ru
 */

namespace rmrevin\yii\fontawesome\tests\unit\fontawesome;

use rmrevin\yii\fontawesome\component\Icon;
use rmrevin\yii\fontawesome\FAR;
use rmrevin\yii\fontawesome\FontAwesome;

/**
 * Class MainTest
 * @package rmrevin\yii\fontawesome\tests\unit\fontawesome
 */
class MainTest extends \rmrevin\yii\fontawesome\tests\unit\TestCase
{

    public function testMain()
    {
        $this->assertInstanceOf('rmrevin\yii\fontawesome\FAR', new FAR());
        $this->assertInstanceOf('rmrevin\yii\fontawesome\FontAwesome', new FAR());

        $this->assertInstanceOf('rmrevin\yii\fontawesome\FontAwesome', new FontAwesome());

        $Icon = FAR::icon('cog');
        $this->assertInstanceOf('rmrevin\yii\fontawesome\component\Icon', $Icon);

        $Stack = FAR::stack();
        $this->assertInstanceOf('rmrevin\yii\fontawesome\component\Stack', $Stack);
    }

    public function testStackOutput()
    {
        $this->assertEquals(
            (string)FAR::s(),
            '<span class="fa-stack"></span>'
        );

        $this->assertEquals(
            (string)FAR::stack(),
            '<span class="fa-stack"></span>'
        );

        $this->assertEquals(
            (string)FAR::stack(['tag' => 'div']),
            '<div class="fa-stack"></div>'
        );

        $this->assertEquals(
            (string)FAR::stack()
                ->icon('cog'),
            '<span class="fa-stack"><i class="far fa-cog fa-stack-1x"></i></span>'
        );

        $this->assertEquals(
            (string)FAR::stack()
                ->on('square-o'),
            '<span class="fa-stack"><i class="far fa-square-o fa-stack-2x"></i></span>'
        );

        $this->assertEquals(
            (string)FAR::stack()
                ->icon('cog')
                ->on('square-o'),
            '<span class="fa-stack"><i class="far fa-square-o fa-stack-2x"></i><i class="far fa-cog fa-stack-1x"></i></span>'
        );

        $this->assertEquals(
            (string)FAR::stack(['data-role' => 'stack'])
                ->icon('cog', ['data-role' => 'icon',])
                ->on('square-o', ['data-role' => 'background']),
            '<span class="fa-stack" data-role="stack"><i class="far fa-square-o fa-stack-2x" data-role="background"></i><i class="far fa-cog fa-stack-1x" data-role="icon"></i></span>'
        );

        $this->assertEquals(
            (string)FAR::stack()
                ->icon(FAR::icon('cog')->spin())
                ->on(FAR::icon('square-o')->size(FAR::SIZE_3X)),
            '<span class="fa-stack"><i class="far fa-square-o fa-3x fa-stack-2x"></i><i class="far fa-cog fa-spin fa-stack-1x"></i></span>'
        );

        $this->assertEquals(
            (string)FAR::stack()
                ->icon(FAR::Icon('cog')->spin())
                ->on(FAR::Icon('square-o')->size(FAR::SIZE_3X)),
            '<span class="fa-stack"><i class="far fa-square-o fa-3x fa-stack-2x"></i><i class="far fa-cog fa-spin fa-stack-1x"></i></span>'
        );

        $this->assertNotEquals(
            (string)FAR::stack()
                ->icon((string)FAR::Icon('cog')->spin())
                ->on((string)FAR::Icon('square-o')->size(FAR::SIZE_3X)),
            '<span class="fa-stack"><i class="far fa-square-o fa-3x fa-stack-2x"></i><i class="far fa-cog fa-spin fa-stack-1x"></i></span>'
        );
    }

    public function testUlOutput()
    {
        $this->assertEquals(
            (string)FAR::ul(),
            '<ul class="fa-ul"></ul>'
        );

        $this->assertEquals(
            (string)FAR::ul()
                ->item('Gear', ['icon' => 'cog']),
            "<ul class=\"fa-ul\">\n<li><i class=\"far fa-cog fa-li\"></i>Gear</li>\n</ul>"
        );

        $this->assertEquals(
            (string)FAR::ul()
                ->item('Check', ['icon' => 'check'])
                ->item('Gear', ['icon' => 'cog']),
            "<ul class=\"fa-ul\">\n<li><i class=\"far fa-check fa-li\"></i>Check</li>\n<li><i class=\"far fa-cog fa-li\"></i>Gear</li>\n</ul>"
        );

        $this->assertEquals(
            (string)FAR::ul(['tag' => 'ol'])
                ->item('Check', ['icon' => 'check'])
                ->item('Gear', ['icon' => 'cog']),
            "<ol class=\"fa-ul\">\n<li><i class=\"far fa-check fa-li\"></i>Check</li>\n<li><i class=\"far fa-cog fa-li\"></i>Gear</li>\n</ol>"
        );

        $this->assertEquals(
            (string)FAR::ul()
                ->item('Check', ['icon' => 'check', 'class' => 'another-class']),
            "<ul class=\"fa-ul\">\n<li class=\"another-class\"><i class=\"far fa-check fa-li\"></i>Check</li>\n</ul>"
        );
    }

    public function testAnotherPrefix()
    {
        FontAwesome::$basePrefix = 'fontawesome';

        $this->assertEquals((string)FAR::icon('cog'), '<i class="far fontawesome-cog"></i>');
        $this->assertEquals((string)FAR::icon('cog', ['tag' => 'span']), '<span class="far fontawesome-cog"></span>');
        $this->assertEquals((string)FAR::icon('cog')->addCssClass('highlight'), '<i class="far fontawesome-cog highlight"></i>');

        $this->assertEquals(
            (string)FAR::stack()
                ->icon(FAR::Icon('cog')->spin())
                ->on(FAR::Icon('square-o')->size(FAR::SIZE_3X)),
            '<span class="fontawesome-stack"><i class="far fontawesome-square-o fontawesome-3x fontawesome-stack-2x"></i><i class="far fontawesome-cog fontawesome-spin fontawesome-stack-1x"></i></span>'
        );

        $this->assertEquals(
            (string)FAR::ul()
                ->item('Gear', ['icon' => 'cog']),
            "<ul class=\"fontawesome-ul\">\n<li><i class=\"far fontawesome-cog fontawesome-li\"></i>Gear</li>\n</ul>"
        );

        FontAwesome::$basePrefix = 'fa';
    }

    public function testIconOutput()
    {
        $this->assertEquals(FAR::i('cog'), '<i class="far fa-cog"></i>');
        $this->assertEquals(FAR::icon('cog'), '<i class="far fa-cog"></i>');
        $this->assertEquals(FAR::icon('cog', ['tag' => 'span']), '<span class="far fa-cog"></span>');
        $this->assertEquals(FAR::icon('cog')->addCssClass('highlight'), '<i class="far fa-cog highlight"></i>');

        $this->assertEquals(FAR::icon('cog')->inverse(), '<i class="far fa-cog fa-inverse"></i>');
        $this->assertEquals(FAR::icon('cog')->spin(), '<i class="far fa-cog fa-spin"></i>');
        $this->assertEquals(FAR::icon('cog')->fixedWidth(), '<i class="far fa-cog fa-fw"></i>');
        $this->assertEquals(FAR::icon('cog')->li(), '<i class="far fa-cog fa-li"></i>');
        $this->assertEquals(FAR::icon('cog')->border(), '<i class="far fa-cog fa-border"></i>');
        $this->assertEquals(FAR::icon('cog')->pullLeft(), '<i class="far fa-cog fa-pull-left"></i>');
        $this->assertEquals(FAR::icon('cog')->pullRight(), '<i class="far fa-cog fa-pull-right"></i>');

        $this->assertEquals(FAR::icon('cog')->size(FAR::SIZE_2X), '<i class="far fa-cog fa-2x"></i>');
        $this->assertEquals(FAR::icon('cog')->size(FAR::SIZE_3X), '<i class="far fa-cog fa-3x"></i>');
        $this->assertEquals(FAR::icon('cog')->size(FAR::SIZE_4X), '<i class="far fa-cog fa-4x"></i>');
        $this->assertEquals(FAR::icon('cog')->size(FAR::SIZE_5X), '<i class="far fa-cog fa-5x"></i>');
        $this->assertEquals(FAR::icon('cog')->size(FAR::SIZE_LARGE), '<i class="far fa-cog fa-lg"></i>');

        $this->assertEquals(FAR::icon('cog')->rotate(FAR::ROTATE_90), '<i class="far fa-cog fa-rotate-90"></i>');
        $this->assertEquals(FAR::icon('cog')->rotate(FAR::ROTATE_180), '<i class="far fa-cog fa-rotate-180"></i>');
        $this->assertEquals(FAR::icon('cog')->rotate(FAR::ROTATE_270), '<i class="far fa-cog fa-rotate-270"></i>');

        $this->assertEquals(FAR::icon('cog')->flip(FAR::FLIP_HORIZONTAL), '<i class="far fa-cog fa-flip-horizontal"></i>');
        $this->assertEquals(FAR::icon('cog')->flip(FAR::FLIP_VERTICAL), '<i class="far fa-cog fa-flip-vertical"></i>');
    }

    public function testIconSizeException()
    {
        $this->setExpectedException(
            'yii\base\InvalidConfigException',
            'FontAwesome::size() - invalid value. Use one of the constants: FontAwesome::SIZE_LARGE, FontAwesome::SIZE_2X, FontAwesome::SIZE_3X, FontAwesome::SIZE_4X, FontAwesome::SIZE_5X.'
        );

        FAR::icon('cog')->size('badvalue');
    }

    public function testIconRotateException()
    {
        $this->setExpectedException(
            'yii\base\InvalidConfigException',
            'FontAwesome::rotate() - invalid value. Use one of the constants: FontAwesome::ROTATE_90, FontAwesome::ROTATE_180, FontAwesome::ROTATE_270.'
        );

        FAR::icon('cog')->rotate('badvalue');
    }

    public function testIconFlipException()
    {
        $this->setExpectedException(
            'yii\base\InvalidConfigException',
            'FontAwesome::flip() - invalid value. Use one of the constants: FontAwesome::FLIP_HORIZONTAL, FontAwesome::FLIP_VERTICAL.'
        );

        FAR::icon('cog')->flip('badvalue');
    }

    public function testIconAddCssClassCondition()
    {
        $this->assertEquals(FAR::$cssPrefix, 'far');
        $this->assertEquals((string)FAR::icon('cog')->addCssClass('highlight', true), '<i class="far fa-cog highlight"></i>');

        $this->setExpectedException(
            'yii\base\InvalidConfigException',
            'Condition is false'
        );

        FAR::icon('cog')->addCssClass('highlight', false, true);
    }
}