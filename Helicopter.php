<?php

//Класс Вертолёт
class Helicopter extends Vehicle
{
    //конструктор с параметрами
    function __construct($m, $p, $s) {
        parent::__construct($m, $p, $s);
        print "Был создан объект класса Helicopter\n";
    }

    //вывод инфы
    public function getInfo() {
        echo "Helicopter: ", $this->getModel(), ", ", $this->getSpeed(), "km/h, ", 
        "$", $this->getPrice(), "\n";
    }
}
?>