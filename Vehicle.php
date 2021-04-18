<?php
abstract class Vehicle
{
    public $model = "Транспортное средство";
    public $price = 0;
    public $speed = 0;

   /* метод для определения в дочерних классах 
    abstract public function getInfo();*/

   /* Общие методы */
    public function getModel() {
        print $this->model;
    }
        public function getPrice() {
        print $this->price;
    }
        public function getSpeed() {
        print $this->speed;
    }
}
?>