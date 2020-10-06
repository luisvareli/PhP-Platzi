<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';
include 'vehicles/ToyCar.php';

use Vehicles\{car, truck, ToyCar};


try {
    echo 'Class ToyCar<br>';
    $toyCar = new ToyCar('Luis');
    // $toyCar->move();
} catch (Exception $e) {
    echo 'This is a toy<br><br>';
    //log...//
} finally {
    echo 'finally<br><br>';
}


//class vehicle
//{
//    protected $owner;
//
//    public function __construct($ownerName)
//    {
//        $this->owner =$ownerName;
//        echo 'construct<br>';
//    }
//
//    public  function move(){
//        echo 'moving<br>';
//    }
//    public function getOwner(){
//        return $this->owner;
//    }
//    public function setOwner($owner){
//        $this->owner = $owner;
//    }
//}

//class car extends vehicle
//{
//    public  function move(){
//        echo 'Truck: moving<br>';
//}
//}

//class truck extends vehicle
//{
//    private $type;
//
//    public function __construct($ownerName, $type)
//    {
//        $this->type = $type;
//        $this->owner = $ownerName;
//    }
//        public function move()
//        {
//            echo 'Truck ' . $this->type . ': moving<br>';
//        }
//
//
//}
echo 'class car<br>';
$car = new car('Luis');
$car->move();
echo 'GPS pos: ' . $car->getPos();

//echo 'Owner car: ' . $car->getOwner() . '<br>';

echo '<br>class truck 1<br>';
$truck1 = new truck('Villaplana', 'Pickup');
$truck1->move();
//echo 'Owner truck: ' . $truck->getOwner();

echo '<br>class truck 2<br>';
$truck2 = new truck('Villaplana', 'Pickup');
$truck2->move();

echo '<br>Total Truck: ' . Truck::getTotal() . '<br>';

$ser = serialize($car);
$newCar = unserialize($ser);

echo 'NewCar Owner: ' . $newCar->getOwner() . '<br>';
