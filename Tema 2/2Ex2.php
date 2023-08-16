<?php
abstract class Vehicle{
    protected $make;
    protected $model;
    protected $year;
    protected $fuel_type;

    public function __construct($make, $model, $year, $fuel_type){
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->fuel_type = $fuel_type;
    }
    abstract public function startEngine();
    abstract public function stopEngine();
    abstract public function dayLights();

    public function showInfo() {
        echo "fabricatie: $this->make , versiune $this->model, an: $this->year, fuel: $this->fuel_type";
    }
}

class Car extends Vehicle{
    protected $color;

    public function __construct($make, $model, $year, $fuel_type, $color)
    {
        parent::__construct($make, $model, $year, $fuel_type);
        $this->color= $color;
    }
    public function startEngine()
    {
        echo " {$this->make} {$this->model} engine started";
    }
    public function stopEngine()
    {
        echo " $this->model engine stop";
    }
    public function dayLights()
    {
        echo "$this->model have daylights";
    }
    public function showInfo()
    {
        parent::showInfo();
        echo "color:". $this->color;
    }
}

class Motorcycle extends Vehicle{
    private $exhaust;
    public function __construct($make, $model, $year, $fuel_type, $exhaust)
    {
        parent::__construct($make, $model, $year, $fuel_type);
        $this->exhaust = $exhaust ;
    }
    public function startEngine()
    {
        echo " $this->model engine started";
    }

    public function stopEngine()
    {
        echo " $this->model engine stop";
    }

    public function dayLights()
    {
        echo "$this->model have daylights";
    }

    public function showInfo()
    {
        parent::showInfo();
        echo "exhaust:". $this->exhaust;
    }
}

class Bus extends Vehicle{
    private $numberOfSeats;
     public function __construct($make, $model, $year, $fuel_type, $numberOfSeats)
     {
         parent::__construct($make, $model, $year, $fuel_type);
         $this->numberOfSeats= $numberOfSeats;
     }

     public function startEngine()
     {
         echo " $this->model engine started";
     }
     public function stopEngine()
     {
         echo " $this->model engine stop";
     }
    public function dayLights()
    {
        echo "$this->model have daylights";
    }

    public function showInfo()
    {
        parent::showInfo();
        echo "number of seats:". $this->numberOfSeats;
    }
}

class Bike extends Vehicle{
    public function __construct($make, $model, $year)
    {
        parent::__construct($make, $model, $year, null);
    }

    public function startEngine()
    {
        echo " No engine, u need leg muscles";
    }
    public function stopEngine()
    {
        echo " Brake the pedals";
    }
    public function dayLights()
    {
        echo " the bike don`t have daylights";
    }
    public function showInfo()
    {
        parent::showInfo();
    }
}

class Truck extends Vehicle{
    public function __construct($make, $model, $year, $fuel_type)
    {
        parent::__construct($make, $model, $year, $fuel_type);
    }

    public function startEngine()
    {
        echo " $this->model engine started";
    }

    public function stopEngine()
    {
        echo " $this->model engine stop";
    }

    public function dayLights()
    {
        echo "$this->model have daylights";
    }
    public function showInfo()
    {
        parent::showInfo();
    }
}

class ElectricBus extends Bus{
    public function __construct($make, $model, $year, $numberOfSeats)
    {
        parent::__construct($make, $model, $year, "electric ", $numberOfSeats);
    }

    public function startEngine()
    {
        echo " just press acc to start engine";
    }

    public function stopEngine()
    {
        echo " electric motor stopped";
    }
}

class ElectricCar extends Car{
    public function __construct($make, $model, $year, $color)
    {
        parent::__construct($make, $model, $year, "electric", $color);
    }
    public function startEngine()
    {
        echo " just press acc to start engine";
    }

    public function stopEngine()
    {
        echo " electric motor stopped";
    }
}

class ElectricTruck extends Truck{
    public function __construct($make, $model, $year)
    {
        parent::__construct($make, $model, $year, "electric");
    }
    public function startEngine()
    {
        echo " just press acc to start engine";
    }

    public function stopEngine()
    {
        echo " electric motor stopped";
    }
}

$car1 = new Car("Toyota","Corolla", 2022, "Gas", "red");
$motorcycle1 = new Motorcycle("Harley","Streed-GLIDE", 2000, "Gas","double");
$bus1 = new Bus("Isuzu","Town",1998, "diesel","70");
$bike1 = new Bike("Yokoha", "mountain", 2021);
$truck1 = new Truck("Scania", "S500", 2015,"diesel");
$electricbus1 = new ElectricBus("Daf", "43044", 2022, "50");
$electriccar1 = new ElectricCar("Tesla", "Model S", 2020, "black");
$electrictruck1 = new ElectricTruck("MAN", "e120", 2021);

echo "car1 info ";
$car1->showInfo();
$car1->startEngine();
$car1->stopEngine();
$car1->dayLights();

echo "truck1" . PHP_EOL;
$truck1->showInfo();
$truck1->startEngine();
$truck1->stopEngine();
$truck1->dayLights();

echo PHP_EOL;

echo "electricbus".PHP_EOL;
$electricbus1->showInfo();
$electricbus1->startEngine();
$electricbus1->stopEngine();
$electricbus1->dayLights();



