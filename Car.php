<?php
declare(strict_types = 1);

//Класс Машина
class Car extends Vehicle
{
    //конструктор с параметрами
    function __construct($m, $p, $s) {
        parent::__construct($m, $p, $s);
        print "Был создан объект класса Car\n";
    }

    //вывод инфы
    public function getInfo() {
        echo "Car: ", $this->getModel(), ", ", $this->getSpeed(), "km/h, ", 
        "$", $this->getPrice(), "\n";
    }
}
?>