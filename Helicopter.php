<?php
declare(strict_types = 1);
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
    throw new Exception("Невозможно загрузить $class_name.");
});

class Helicopter extends Vehicle implements VehicleInterface
{
    public function getInfo() {
        echo ("Helicopter:$this->getModel(), $this->getSpeed() km/h, 
        $$this->getPrice()");
    }
}
?>