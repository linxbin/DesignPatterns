<?php

/**
 * 程序员接口类
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-06-28
 * Time: 14:18
 */

namespace DesignPatterns\SimpleFactory;

interface ProgrammerInterface
{
    /**
     * 所有程序员都具有写代码的功能
     * @return mixed
     */
    public function writeCode();
}