<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-06-29
 * Time: 11:46
 */

namespace DesignPatterns\StaticFactory;

final class StaticFactory
{
    public static function build( $type ): ProgrammerInterface
    {
        switch ( $type ) {
            case 'go' :
                return new Goer();
            case 'php' :
                return new PHPer();
            case 'java' :
                return new JAVAer();
        }
        throw new \InvalidArgumentException( '无效的类型' );
    }
}