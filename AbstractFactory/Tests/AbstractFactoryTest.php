<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-06-29
 * Time: 15:17
 */

namespace DesignPatterns\AbstractFactory\Tests;

use DesignPatterns\AbstractFactory\Androider;
use DesignPatterns\AbstractFactory\AndroidProjectFactory;
use DesignPatterns\AbstractFactory\Goer;
use DesignPatterns\AbstractFactory\PHPer;
use DesignPatterns\AbstractFactory\VUEer;
use DesignPatterns\AbstractFactory\WebProjectFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    /**
     *
     */
    public function testCreateWebProject()
    {
        $WebProjectFactory = new WebProjectFactory();
        $Goer              = $WebProjectFactory->createBackend();
        $VUEer             = $WebProjectFactory->createFrontend();
        $this->assertInstanceOf( Goer::class, $Goer );
        $this->assertInstanceOf( VUEer::class, $VUEer );
    }

    /**
     *
     */
    public function testCreateAndroidProject()
    {
        $WebProjectFactory = new AndroidProjectFactory();
        $PHPer             = $WebProjectFactory->createBackend();
        $Androider         = $WebProjectFactory->createFrontend();
        $this->assertInstanceOf( Androider::class, $Androider );
        $this->assertInstanceOf( PHPer::class, $PHPer );
    }
}