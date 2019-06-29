<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-06-29
 * Time: 11:13
 */

namespace DesignPatterns\FactoryMethod;

use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    /**
     *
     */
    public function testCreateGoer()
    {
        $GoerFactory = new GoerFactory();
        $goer        = $GoerFactory->createProgrammer();
        $this->assertInstanceOf( Goer::class, $goer );
    }

    public function testCreatePHPer()
    {
        $PHPerFactory = new PHPerFactory();
        $PHPer        = $PHPerFactory->createProgrammer();
        $this->assertInstanceOf( PHPer::class, $PHPer );
    }

    public function testCreateJAVAer()
    {
        $JAVAerFactory = new JAVAerFactory();
        $JAVAerFactory = $JAVAerFactory->createProgrammer();
        $this->assertInstanceOf( JAVAer::class, $JAVAerFactory );
    }
}