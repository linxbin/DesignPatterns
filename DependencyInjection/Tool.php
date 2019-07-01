<?php
/**
 * Created by PhpStorm.
 * User: Linxb
 * Date: 2019-07-01
 * Time: 15:04
 */

namespace DesignPatterns\DependencyInjection;

class Tool
{
    protected $keyboard;

    protected $mouse;

    protected $computer;

    public function setKeyboard( $keyboard ): void
    {
        $this->keyboard = $keyboard;
    }

    public function setMouse( $mouse ): void
    {
        $this->mouse = $mouse;
    }

    public function setComputer( $computer ): void
    {
        $this->computer = $computer;
    }

    public function getKeyboard(): string
    {
        return $this->keyboard;
    }

    public function getMouse(): string
    {
        return $this->mouse;
    }

    public function getComputer(): string
    {
        return $this->computer;
    }
}