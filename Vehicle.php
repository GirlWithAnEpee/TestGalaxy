<?php
declare(strict_types = 1);

//Абстрактный класс Транспортное Средство
abstract class Vehicle implements VehicleInterface
{
    private string $model = "Транспортное средство";//модель
    private float $price = 0;//цена
    private int $speed = 0;//скорость

    //конструктор с параметрами
    function __construct(string $model, float $price, int $speed) {
        $this->price=$price;
        $this->model=$model;
        $this->speed=$speed;
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

    //присвоение значений полям класса
    public function __set($property, $value)
    {
        try {
            $this->$property = $value;
        }
        catch (Exception $e) {
            echo 'Исключение: ',  $e->getMessage(), "\n";
        }
    }
}
?>