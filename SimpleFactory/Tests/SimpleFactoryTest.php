<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-06-28
 * Time: 14:32
 */

namespace DesignPatterns\SimpleFactory\Tests;

use DesignPatterns\SimpleFactory\GoProgrammer;
use DesignPatterns\SimpleFactory\JavaProgrammer;
use DesignPatterns\SimpleFactory\PhPProgrammer;
use DesignPatterns\SimpleFactory\ProgrammerFactory;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{

    /**
     * @throws \Exception
     */
    public function testCanCreateGoProgrammer()
    {
        $programmer = (new ProgrammerFactory())->createProgrammer( 'go' );
        $this->assertInstanceOf( GoProgrammer::class, $programmer );
    }

    /**
     * @throws \Exception
     */
    public function testCanCreatePhpProgrammer()
    {
        $programmer = (new ProgrammerFactory())->createProgrammer( 'php' );
        $this->assertInstanceOf( PhPProgrammer::class, $programmer );
    }

    /**
     * @throws \Exception
     */
    public function testCanCreateJavaProgrammer()
    {
        $programmer = (new ProgrammerFactory())->createProgrammer( 'java' );
        $this->assertInstanceOf( JavaProgrammer::class, $programmer );
    }
}