<?php
declare(strict_types = 1); //для подключения строгой типизации
//автозагрузка классов
function __autoload( $className ) {
    $className = str_replace( "..", "", $className );
    require_once( "$className.php" );
}

//создаём парк, инициализируем вместимость
$park = new Park(5);

//начинаем наполнять парк: создаём объект с помощью конструктора с параметрами,
//выводим про него инфу, добавляем его в парк и проверяем, успешно ли
$h = new Helicopter("Hell_Model", 158828, 180);
$h->getInfo();
if ($park->addVehicle($h))
    echo "Вертолёт успешно добавлен в парк \n";
else
    echo "Объект не был добавлен, парк переполнен!\n";

$m = new Motorbike("Moto_Model", 1588, 250);
$m->getInfo();
if ($park->addVehicle($m))
    echo "Мотоцикл успешно добавлен в парк \n";
else
    echo "Объект не был добавлен, парк переполнен! \n";

$c1 = new Car("Lada Granta", 6883, 190);
$c1->getInfo();
if ($park->addVehicle($c1))
    echo "Мотоцикл успешно добавлен в парк \n";
else
    echo "Объект не был добавлен, парк переполнен! \n";

$c2 = new Car("Suzuki Vitara", 19853, 185);
$c2->getInfo();
if ($park->addVehicle($c2))
    echo "Автомобиль успешно добавлен в парк \n";
else
    echo "Объект не был добавлен, парк переполнен! \n";

$c3 = new Car("Subaru Outback", 39707, 235);
$c3->getInfo();
if ($park->addVehicle($c3))
    echo "Автомобиль успешно добавлен в парк \n";
else
    echo "Объект не был добавлен, парк переполнен! \n";

//а вот эта машина уже не должна поместиться
$c4 = new Car("Bugatti Veyron", 2729844, 435);
$c4->getInfo();
if ($park->addVehicle($c4))
    echo "Автомобиль успешно добавлен в парк \n";
else
    echo "Объект не был добавлен, парк переполнен! \n";

//ищем самое дорогое ТС
$mostExp = $park->getExpensive();
echo "Самое дорогое транспортное средство в парке: ", $mostExp->getInfo();

//считаем суммарную стоимость ТС
$sum = $park->getSumCost();
echo "Общая стоимость всех ТС парка: $", $sum, "\n";

//ищем все авто в парке
$cars = $park->getAllCars();
echo "Список автомобилей в парке:\n";
foreach ($cars as $car)
    echo $car->getInfo();

//ищем среднюю стоимость ТС
$mid = $park->getMidCost();
echo "Средняя стоимость всех ТС парка: $", $mid, "\n";
?>