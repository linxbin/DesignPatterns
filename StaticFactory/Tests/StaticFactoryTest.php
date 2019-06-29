<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-06-29
 * Time: 11:52
 */

namespace DesignPatterns\StaticFactory\Tests;

use DesignPatterns\StaticFactory\Goer;
use DesignPatterns\StaticFactory\JAVAer;
use DesignPatterns\StaticFactory\PHPer;
use DesignPatterns\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCreateGoer()
    {
        $goer = StaticFactory::build( 'go' );
        $this->assertInstanceOf( Goer::class, $goer );
    }

    public function testCreatePHPer()
    {
        $goer = StaticFactory::build( 'php' );
        $this->assertInstanceOf( PHPer::class, $goer );
    }

    public function testCreateJAVAer()
    {
        $goer = StaticFactory::build( 'java' );
        $this->assertInstanceOf( JAVAer::class, $goer );
    }
}