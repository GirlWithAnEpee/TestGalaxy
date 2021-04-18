<?php
class Car extends Vehicle implements VehicleInterface
{
    public function getInfo() {
        echo ("Car:$this->getModel(), $this->getSpeed() km/h, 
        $$this->getPrice()");
    }
}
?>