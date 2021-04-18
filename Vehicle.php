<?php
declare(strict_types = 1);
abstract class Vehicle
{
    public string $model = "Транспортное средство";
    public float $price = 0;
    public int $speed = 0;

   /* метод для определения в дочерних классах 
    abstract public function getInfo();*/

   /* Общие методы */
    public function getModel() {
        return $this->model;
    }
        public function getPrice() {
        return $this->price;
    }
        public function getSpeed() {
        return $this->speed;
    }
}
?>