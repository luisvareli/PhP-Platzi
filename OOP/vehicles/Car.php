<?php

namespace Vehicles;

require_once 'VehicleBase.php';

class car extends VehicleBase {
    public  function move() {
        echo 'Car: moving<br>';
    }
}