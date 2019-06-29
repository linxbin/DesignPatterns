<?php

/**
 * 创建程序员的工厂类
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-06-28
 * Time: 14:23
 */

namespace DesignPatterns\SimpleFactory;

class ProgrammerFactory
{
    /**
     * @param $programType
     * @return GoProgrammer|JavaProgrammer|PhPProgrammer
     * @throws \Exception
     */
    public function createProgrammer( $programType )
    {
        switch ( $programType ) {
            case 'php' :
                return new PhPProgrammer();
            case 'java':
                return new JavaProgrammer();
            case 'go':
                return new GoProgrammer();
            default:
                throw new \Exception( '不存在这种程序员' );
        }
    }
}