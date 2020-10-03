<?php

class vehicle
{
    protected $owner;

    public function __construct($ownerName)
    {
        $this->owner =$ownerName;
        echo 'construct<br>';
    }

    public  function move(){
        echo 'moving<br>';
    }
    public function getOwner(){
        return $this->owner;
    }
    public function setOwner($owner){
        $this->owner = $owner;
    }
}

class car extends vehicle
{
    public  function move(){
        echo 'Truck: moving<br>';
}
}

class truck extends vehicle
{
    private $type;

    public function __construct($ownerName, $type)
    {
        $this->type = $type;
        $this->owner = $ownerName;
    }
        public function move()
        {
            echo 'Truck ' . $this->type . ': moving<br>';
        }


}
echo 'class car<br>';
$car =new car('Luis');
$car->move();
echo 'Owner car: ' . $car->getOwner() . '<br>';

echo'<br>class truck<br>';
$truck =new truck('Villaplana','Pickup');
$truck->move();
echo 'Owner truck: ' . $truck->getOwner();