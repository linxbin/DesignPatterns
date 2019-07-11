<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-07-01
 * Time: 15:30
 */

namespace DesignPatterns\Observer;

use SplSubject;

class PHPerObserver implements \SplObserver
{
    public function update( SplSubject $subject )
    {
        echo "version is updated";
    }
}