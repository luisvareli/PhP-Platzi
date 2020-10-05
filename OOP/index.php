<?php

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

use Vehicles\{car,truck};

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
$car =new car('Luis');
$car->move();
//echo 'Owner car: ' . $car->getOwner() . '<br>';

echo'<br>class truck 1<br>';
$truck1 =new truck('Villaplana','Pickup');
$truck1->move();
//echo 'Owner truck: ' . $truck->getOwner();

echo'<br>class truck 2<br>';
$truck2 =new truck('Villaplana','Pickup');
$truck2->move();

echo '<br>Total Truck: ' . Truck::getTotal() .'<br>';
