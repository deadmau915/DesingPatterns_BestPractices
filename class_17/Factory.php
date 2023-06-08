<?php

interface VehicleInterface {
    public function drive();
}

class Car implements VehicleInterface {
    public function drive() {
        echo "Driving a car...";
    }
}

class Motorcycle implements VehicleInterface {
    public function drive() {
        echo "Driving a motorcycle...";
    }
}

class VehicleFactory {
    public static function create($type) {
        switch ($type) {
            case 'car':
                return new Car();
            case 'motorcycle':
                return new Motorcycle();
            default:
                throw new InvalidArgumentException("Invalid vehicle type.");
        }
    }
}

$car = VehicleFactory::create('car');
$car->drive();  // Output: "Driving a car..."

$motorcycle = VehicleFactory::create('motorcycle');
$motorcycle->drive();  // Output: "Driving a motorcycle..."

?>

