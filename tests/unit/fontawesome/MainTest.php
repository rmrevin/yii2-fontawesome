<?php
/**
 * MainTest.php
 * @author Revin Roman http://phptime.ru
 */

namespace rmrevin\yii\fontawesome\tests\unit\fontawesome;

use rmrevin\yii\fontawesome\component\Icon;
use rmrevin\yii\fontawesome\FA;
use rmrevin\yii\fontawesome\FontAwesome;
use rmrevin\yii\fontawesome\tests\unit\TestCase;

/**
 * Class MainTest
 * @package rmrevin\yii\fontawesome\tests\unit\fontawesome
 */
class MainTest extends TestCase
{

    public function testMain()
    {
        $this->assertInstanceOf('rmrevin\yii\fontawesome\FA', new FA());
        $this->assertInstanceOf('rmrevin\yii\fontawesome\FontAwesome', new FA());

        $this->assertInstanceOf('rmrevin\yii\fontawesome\FontAwesome', new FontAwesome());

        $Icon = FA::icon('cog');
        $this->assertInstanceOf('rmrevin\yii\fontawesome\component\Icon', $Icon);

        $Stack = FA::stack();
        $this->assertInstanceOf('rmrevin\yii\fontawesome\component\Stack', $Stack);
    }

    public function testStackOutput()
    {
        $this->assertEquals(
            (string)FA::stack(),
            '<span class="fa-stack"></span>'
        );

        $this->assertEquals(
            (string)FA::stack()
                ->icon('cog'),
            '<span class="fa-stack"><i class="fa fa-cog fa-stack-1x"></i></span>'
        );

        $this->assertEquals(
            (string)FA::stack()
                ->on('square-o'),
            '<span class="fa-stack"><i class="fa fa-square-o fa-stack-2x"></i></span>'
        );

        $this->assertEquals(
            (string)FA::stack()
                ->icon('cog')
                ->on('square-o'),
            '<span class="fa-stack"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-cog fa-stack-1x"></i></span>'
        );

        $this->assertEquals(
            (string)FA::stack(['data-role' => 'stack'])
                ->icon('cog', ['data-role' => 'icon',])
                ->on('square-o', ['data-role' => 'background']),
            '<span class="fa-stack" data-role="stack"><i class="fa fa-square-o fa-stack-2x" data-role="background"></i><i class="fa fa-cog fa-stack-1x" data-role="icon"></i></span>'
        );

        $this->assertEquals(
            (string)FA::stack()
                ->icon((new Icon('cog'))->spin())
                ->on((new Icon('square-o'))->size(FA::SIZE_3X)),
            '<span class="fa-stack"><i class="fa fa-square-o fa-3x fa-stack-2x"></i><i class="fa fa-cog fa-spin fa-stack-1x"></i></span>'
        );
    }

    public function testIconOutput()
    {
        $this->assertEquals(FA::icon('cog'), '<i class="fa fa-cog"></i>');

        $this->assertEquals(FA::icon('cog')->inverse(), '<i class="fa fa-cog fa-inverse"></i>');
        $this->assertEquals(FA::icon('cog')->spin(), '<i class="fa fa-cog fa-spin"></i>');
        $this->assertEquals(FA::icon('cog')->fixed_width(), '<i class="fa fa-cog fa-fw"></i>');
        $this->assertEquals(FA::icon('cog')->ul(), '<i class="fa fa-cog fa-ul"></i>');
        $this->assertEquals(FA::icon('cog')->li(), '<i class="fa fa-cog fa-li"></i>');
        $this->assertEquals(FA::icon('cog')->border(), '<i class="fa fa-cog fa-border"></i>');
        $this->assertEquals(FA::icon('cog')->pull_left(), '<i class="fa fa-cog pull-left"></i>');
        $this->assertEquals(FA::icon('cog')->pull_right(), '<i class="fa fa-cog pull-right"></i>');

        $this->assertEquals(FA::icon('cog')->size(FA::SIZE_2X), '<i class="fa fa-cog fa-2x"></i>');
        $this->assertEquals(FA::icon('cog')->size(FA::SIZE_3X), '<i class="fa fa-cog fa-3x"></i>');
        $this->assertEquals(FA::icon('cog')->size(FA::SIZE_4X), '<i class="fa fa-cog fa-4x"></i>');
        $this->assertEquals(FA::icon('cog')->size(FA::SIZE_5X), '<i class="fa fa-cog fa-5x"></i>');
        $this->assertEquals(FA::icon('cog')->size(FA::SIZE_LARGE), '<i class="fa fa-cog fa-lg"></i>');

        $this->assertEquals(FA::icon('cog')->rotate(FA::ROTATE_90), '<i class="fa fa-cog fa-rotate-90"></i>');
        $this->assertEquals(FA::icon('cog')->rotate(FA::ROTATE_180), '<i class="fa fa-cog fa-rotate-180"></i>');
        $this->assertEquals(FA::icon('cog')->rotate(FA::ROTATE_270), '<i class="fa fa-cog fa-rotate-270"></i>');

        $this->assertEquals(FA::icon('cog')->flip(FA::FLIP_HORIZONTAL), '<i class="fa fa-cog fa-flip-horizontal"></i>');
        $this->assertEquals(FA::icon('cog')->flip(FA::FLIP_VERTICAL), '<i class="fa fa-cog fa-flip-vertical"></i>');
    }

    public function testIconSizeException()
    {
        $this->setExpectedException(
            'yii\base\InvalidConfigException',
            'FA::size() - invalid value. Use one of the constants: FA::SIZE_LARGE, FA::SIZE_2X, FA::SIZE_3X, FA::SIZE_4X, FA::SIZE_5X.'
        );
        FA::icon('cog')
            ->size('badvalue');
    }

    public function testIconRotateException()
    {
        $this->setExpectedException(
            'yii\base\InvalidConfigException',
            'FA::rotate() - invalid value. Use one of the constants: FA::ROTATE_90, FA::ROTATE_180, FA::ROTATE_270.'
        );
        FA::icon('cog')
            ->rotate('badvalue');
    }

    public function testIconFlipException()
    {
        $this->setExpectedException(
            'yii\base\InvalidConfigException',
            'FA::flip() - invalid value. Use one of the constants: FA::FLIP_HORIZONTAL, FA::FLIP_VERTICAL.'
        );
        FA::icon('cog')
            ->flip('badvalue');
    }
}