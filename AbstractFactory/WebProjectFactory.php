<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-06-29
 * Time: 14:54
 */

namespace DesignPatterns\AbstractFactory;

class WebProjectFactory implements ProjectFactoryInterface
{
    public function createFrontend()
    {
        return new VUEer();
    }

    public function createBackend()
    {
        return new Goer();
    }
}