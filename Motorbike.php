<?php

//Класс Мотоцикл
class Motorbike extends Vehicle
{
    //конструктор с параметрами
    function __construct($m, $p, $s) {
        parent::__construct($m, $p, $s);
        print "Был создан объект класса Motorbike\n";
    }

    //вывод инфы
    public function getInfo() {
        echo "Motorbike: ", $this->getModel(), ", ", $this->getSpeed(), "km/h, ", 
        "$", $this->getPrice(), "\n";
    }
}
?>