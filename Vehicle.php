<?php
declare(strict_types = 1);
abstract class Vehicle
{
    private string $model = "Транспортное средство";
    private float $price = 0;
    private int $speed = 0;

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