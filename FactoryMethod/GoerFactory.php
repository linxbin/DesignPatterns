<?php

/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-06-29
 * Time: 10:59
 */

namespace DesignPatterns\FactoryMethod;

class GoerFactory implements ProgrammerFactory
{
    public function createProgrammer(): Goer
    {
        return new Goer();
    }
}