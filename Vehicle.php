<?php
declare(strict_types = 1);

//Абстрактный класс Транспортное Средство
abstract class Vehicle implements VehicleInterface
{
    private string $model = "Транспортное средство";//модель
    private float $price = 0;//цена
    private int $speed = 0;//скорость

    //конструктор с параметрами
    function __construct(string $m, float $p, int $s) {
        $this->price=$p;
        $this->model=$m;
        $this->speed=$s;
    }

    public function getModel() {
        return $this->model;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getSpeed() {
        return $this->speed;
    }

    public function __set($property, $value)
	{
		$this->$property = $value;
	}
}
?>