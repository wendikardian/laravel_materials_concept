<?php

namespace Functionality;

class Computer{
    public bool $isPowerOn = false;
    public function turnOn(): bool{
        return true;
    }
    public function turnOff(): bool{
        return !$this->turnOn();
    }
}

?>