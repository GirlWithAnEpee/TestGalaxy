<?php
class Helicopter extends Vehicle implements VehicleInterface
{
    public function getInfo() {
        echo ("Helicopter:$this->getModel(), $this->getSpeed() km/h, 
        $$this->getPrice()");
    }
}
?>