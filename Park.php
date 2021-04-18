<?php

//Класс Парк
class Park
{
    private $vehicles = array(); //массив ТС
    private int $vmest = 0; //вместительность парка

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
        if (count($this->vehicles)<$this->vmest){
            $this->vehicles[]=$v;
            return true;
        }
        else {
            return false;
        }           
    }

    //получить самое дорогое ТС
    public function getExpensive() {
        $mostExp = $this->vehicles[0];
        foreach ($this->vehicles as $value)
        {
            if ($value->getPrice()>$mostExp->getPrice())
                $mostExp = $value;
        }
        return $mostExp;
    }

    //получить суммарную стоимость ТС
    public function getSumCost(): int {
        $sum = 0;
        foreach ($this->vehicles as $value)
        {
            $sum += $value->getPrice();
        }
        return $sum;
    }

    //получить список авто в парке
    public function getAllCars(): array {
        $cars = array();
        foreach ($this->vehicles as $value)
        {
            if (get_class($value)=="Car")
                $cars[]=$value;
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
