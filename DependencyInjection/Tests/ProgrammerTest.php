<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-07-01
 * Time: 15:08
 */

namespace DesignPatterns\DependencyInjection\Tests;

use DesignPatterns\DependencyInjection\Programmer;
use DesignPatterns\DependencyInjection\Tool;
use PHPUnit\Framework\TestCase;

class ProgrammerTest extends TestCase
{
    public function testProgrammerUseComputer()
    {
        $tool = new Tool();
        $tool->setComputer( 'MacBook pro' );
        $programmer = new Programmer( $tool );
        $this->assertEquals( 'MacBook pro', $programmer->useComputer() );
    }

    public function testProgrammerUseKeyboard()
    {
        $tool = new Tool();
        $tool->setKeyboard( 'Logic mechanical keyboard' );
        $programmer = new Programmer( $tool );
        $this->assertEquals( 'Logic mechanical keyboard', $programmer->useKeyboard() );
    }

    public function testProgrammerUseMouse()
    {
        $tool = new Tool();
        $tool->setMouse( 'mouse' );
        $programmer = new Programmer( $tool );
        $this->assertEquals( 'mouse', $programmer->useMouse() );
    }
}