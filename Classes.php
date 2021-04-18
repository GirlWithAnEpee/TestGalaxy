<?php
abstract class Vehicle
{
    $model = "";
    $price = 0;
    $speed = 0;

   /* метод для определения в дочерних классах */
    abstract protected function getInfo();

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

class Car extends Vehicle
{
    public function getInfo() {
        echo ("Car:$this->getModel(), $this->getSpeed km/h, 
        $$this->getPrice");
    }
}

class Motorbike extends Vehicle
{
    public function getInfo() {
        echo ("Motorbike:$this->getModel(), $this->getSpeed km/h, 
        $$this->getPrice");
    }
}

class Helicopter extends Vehicle
{
    public function getValue() {
        echo ("Helicopter:$this->getModel(), $this->getSpeed km/h, 
        $$this->getPrice");
    }
}

class Park
{
    public $vehicles = array();
    public $vmest = 0;

    public function addVehicle(Vehicle $v){
        if (count($this->vehicles)<$vmest){
            $this->vehicles[]=$v;
            return true;
        }
        else {
            echo "The park is full!"
            return false;
        }           
    }

    public function getExpensive{
        $mostExp = $this->vehicles[0];
        for ($i=1; i<count($this->vehicles); $i++)
        {
            if ($this->vehicles[i]->getPrice()>$this->vehicles[0]->getPrice())
                $mostExp = $this->vehicles[i];
        }
        return $mostExp;
        /*echo "The most expensive vehicle:";
        echo $mostExp->getInfo();*/
    }

    public function getSumCost{
        $sum = 0;
        for ($i=0; i<count($this->vehicles); $i++)
        {
            $sum += $this->vehicles[i]->getPrice();
        }
        return $sum;
    }

    public function getAllCars{
        $cars = array();
        for ($i=0; i<count($this->vehicles); $i++)
        {
            if (get_class($this->vehicles[i])=="Car")
                cars[]=$this->vehicles[i];
        }
        return $cars;
        /*echo "The list of cars:";
        for ($i=0; i<count($cars); $i++)
            echo $cars[i]->getInfo();*/
    }

    public function getMidCost{
        
        $midCost = $this->getSumCost()/count($this->vehicles);
        return $midCost;
    }
}

?>