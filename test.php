<?php
declare(strict_types = 1);
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
    throw new Exception("Невозможно загрузить $class_name.");
});

$park = new Park();
$park->vmest = 5;
$h = new Helicopter("Hell_Model", 3500000, 200);
$h->getInfo();
if ($park->addVehicle($h))
    echo "Вертолёт успешно добавлен в парк";
else
    echo "Парк переполнен!"

$m = new Motorbike("Moto_Model", 120000, 150);
$m->getInfo();
if ($park->addVehicle($m))
    echo "Мотоцикл успешно добавлен в парк";
else
    echo "Парк переполнен!"

$c1 = new Car("Lada Granta", 120000, 170);
$c1->getInfo();
if ($park->addVehicle($c1))
    echo "Мотоцикл успешно добавлен в парк";
else
    echo "Парк переполнен!"

$c2 = new Car("Lada Granta", 120000, 170);
$c2->getInfo();
if ($park->addVehicle($c2))
    echo "Автомобиль успешно добавлен в парк";
else
    echo "Парк переполнен!"

$c3 = new Car("Lada Granta", 120000, 170);
$c3->getInfo();
if ($park->addVehicle($c3))
    echo "Автомобиль успешно добавлен в парк";
else
    echo "Парк переполнен!"

$c4 = new Car("Lada Granta", 120000, 170);
$c4->getInfo();
if ($park->addVehicle($c4))
    echo "Автомобиль успешно добавлен в парк";
else
    echo "Парк переполнен!"

$mostExp = $park->getExpensive();
echo "Самое дорогое транспортное средство в парке: $mostExp->getInfo()";

$sum = $park->getSumCost();
echo "Общая стоимость всех ТС парка: $sum";

$cars = $park->getAllCars();
echo "Список автомобилей в парке:";
        for ($i=0; i<count($cars); $i++)
            echo $cars[i]->getInfo();

$mid = $park->getMidCost();
echo "Средняя стоимость всех ТС парка: $mid";
?>