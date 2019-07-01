<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-07-01
 * Time: 15:03
 */

namespace DesignPatterns\DependencyInjection;

class Programmer
{
    protected $tool;

    public function __construct( Tool $tool )
    {
        $this->tool = $tool;
    }

    public function useKeyboard(): string
    {
        return $this->tool->getKeyboard();
    }

    public function useMouse(): string
    {
        return $this->tool->getMouse();
    }

    public function useComputer(): string
    {
        return $this->tool->getComputer();
    }

}