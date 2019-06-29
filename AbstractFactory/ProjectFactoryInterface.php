<?php
/**
 * 一个项目组的抽象工厂类
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-06-29
 * Time: 14:46
 */

namespace DesignPatterns\AbstractFactory;

interface ProjectFactoryInterface
{
    /**
     * @return mixed
     */
    public function createFrontend();

    /**
     * @return mixed
     */
    public function createBackend();
}