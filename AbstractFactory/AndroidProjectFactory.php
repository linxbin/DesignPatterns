<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-06-29
 * Time: 14:54
 */

namespace DesignPatterns\AbstractFactory;

class AndroidProjectFactory implements ProjectFactoryInterface
{
    public function createBackend()
    {
        return new PHPer();
    }

    public function createFrontend()
    {
        return new Androider();
    }
}