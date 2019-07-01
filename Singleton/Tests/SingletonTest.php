<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-07-01
 * Time: 14:48
 */

namespace DesignPatterns\Singleton\Tests;

use DesignPatterns\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase
{
    public function testCreateSingletonUniqueness()
    {
        $object1 = Singleton::getInstance();
        $object2 = Singleton::getInstance();
        $this->assertSame( $object1, $object2 );
    }
}