<?php

//Класс Парк
class Park
{
    private $vehicles = array(); //массив ТС
    private int $capacity = 0; //вместительность парка

    //конструктор с параметрами
    function __construct(int $capacity) {
        $this->capacity=$capacity;
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

    //добавить ТС в парк
    public function addVehicle(Vehicle $v): bool {
        if (count($this->vehicles)<$this->capacity){
            $this->vehicles[]=$v;
            return true;
        }
        else {
            return false;
        }           
    }

    //получить самое дорогое ТС
    public function getExpensive(): Vehicle {
        $mostExp = $this->vehicles[0];
        foreach ($this->vehicles as $vehicle)
        {
            if ($vehicle->getPrice()>$mostExp->getPrice())
                $mostExp = $vehicle;
        }
        return $mostExp;
    }

    //получить суммарную стоимость ТС
    public function getSumCost(): float {
        $sum = 0;
        foreach ($this->vehicles as $vehicle)
        {
            $sum += $vehicle->getPrice();
        }
        return $sum;
    }

    //получить список авто в парке
    public function getAllCars(): array {
        $cars = array();
        foreach ($this->vehicles as $vehicle)
        {
            if (get_class($vehicle)=="Car")
                $cars[]=$vehicle;
        }
        return $cars;
    }

    //получить среднюю стоимость ТС
    public function getMidCost(): float {
        
        $midCost = $this->getSumCost()/count($this->vehicles);
        return $midCost;
    }
}
?>
