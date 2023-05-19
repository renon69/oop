<?php 

    class MyCar{
     private $make;
     private $model;
     private $year;

      public function __construct($make, $model, $year){
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
      }

      public function displayInfo() {

          echo "make: ". $this->make ."<br>";
          echo "model: ". $this->model ."<br>";
          echo "year: ". $this->year ;

      }
    }

    $car = new Mycar('HILLUX CONQUEST', 'TOYOTA', '2030');
    $car->displayInfo();
?>