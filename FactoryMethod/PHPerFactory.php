<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-06-29
 * Time: 11:02
 */

namespace DesignPatterns\FactoryMethod;

class PHPerFactory implements ProgrammerFactory
{
    public function createProgrammer(): PHPer
    {
        return new PHPer();
    }
}