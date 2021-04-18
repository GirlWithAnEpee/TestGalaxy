<?php

interface VehicleInterface {
    //общие методы для всех классов-наследников
    public function getModel();
    public function getPrice();
    public function getSpeed();
    public function getInfo();
}
?>