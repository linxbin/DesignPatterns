<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-06-29
 * Time: 11:00
 */

namespace DesignPatterns\FactoryMethod;

class JAVAerFactory implements ProgrammerFactory
{
    public function createProgrammer(): JAVAer
    {
        return new JAVAer();
    }
}