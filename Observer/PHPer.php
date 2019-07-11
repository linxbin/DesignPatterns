<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-07-01
 * Time: 15:30
 */

namespace DesignPatterns\Observer;

use SplObserver;

// 该设计模式的核心思想是，SplSubject对象会在其状态改变时调用 notify()方法，一旦这个方法被调用，任何先前通过 attach()方法注册上来的 SplObserver对象都会以调用其 update()方法的方式被更新。
class PHPer implements \SplSubject
{
    public $version;

    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach( SplObserver $observer )
    {
        $this->observers->attach( $observer );
    }

    public function detach( SplObserver $observer )
    {
        $this->observers->detach( $observer );
    }

    public function setVersion( $version )
    {
        $this->version = $version;
        $this->notify();
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function notify()
    {
        foreach ( $this->observers as $observer ) {
            $observer->update( $this );
        }
    }
}