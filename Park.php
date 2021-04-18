<?php
declare(strict_types = 1);
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
    throw new Exception("Невозможно загрузить $class_name.");
});

class Park
{
    private $vehicles = array();
    private int $vmest = 0;

    public function addVehicle(Vehicle $v): boolean {
        if (count($this->vehicles)<$vmest){
            $this->vehicles[]=$v;
            return true;
        }
        else {
            return false;
        }           
    }

    public function getExpensive(): Vehicle {
        $mostExp = $this->vehicles[0];
        for ($i=1; $i<count($this->vehicles); $i++)
        {
            if ($this->vehicles[i]->getPrice()>$this->vehicles[0]->getPrice())
                $mostExp = $this->vehicles[i];
        }
        return $mostExp;
        /*echo "The most expensive vehicle:";
        echo $mostExp->getInfo();*/
    }

    public function getSumCost(): float {
        $sum = 0;
        for ($i=0; i<count($this->vehicles); $i++)
        {
            $sum += $this->vehicles[i]->getPrice();
        }
        return $sum;
    }

    public function getAllCars(): array {
        $cars = array();
        for ($i=0; i<count($this->vehicles); $i++)
        {
            if (get_class($this->vehicles[i])=="Car")
                $cars[]=$this->vehicles[i];
        }
        return $cars;
    }

    public function getMidCost(): float {
        
        $midCost = $this->getSumCost()/count($this->vehicles);
        return $midCost;
    }
}
?>
