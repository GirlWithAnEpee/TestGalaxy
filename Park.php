<?php
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
            echo "The park is full!";
            return false;
        }           
    }

    public function getExpensive(){
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

    public function getSumCost(){
        $sum = 0;
        for ($i=0; i<count($this->vehicles); $i++)
        {
            $sum += $this->vehicles[i]->getPrice();
        }
        return $sum;
    }

    public function getAllCars(){
        $cars = array();
        for ($i=0; i<count($this->vehicles); $i++)
        {
            if (get_class($this->vehicles[i])=="Car")
                $cars[]=$this->vehicles[i];
        }
        return $cars;
        /*echo "The list of cars:";
        for ($i=0; i<count($cars); $i++)
            echo $cars[i]->getInfo();*/
    }

    public function getMidCost(){
        
        $midCost = $this->getSumCost()/count($this->vehicles);
        return $midCost;
    }
}
?>