<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-07-01
 * Time: 14:46
 */

namespace DesignPatterns\Singleton;

final class Singleton
{

    private static $instance;

    public static function getInstance(): Singleton
    {
        if ( null === static::$instance ) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    /**
     * 不允许从外部调用以防止创建多个实例
     * 要使用单例，必须通过 Singleton::getInstance() 方法获取实例
     */
    private function __construct()
    {
    }

    /**
     * 防止实例被克隆（这会创建实例的副本）
     */
    private function __clone()
    {
    }

    /**
     * 防止反序列化（这将创建它的副本）
     */
    private function __wakeup()
    {
    }
}