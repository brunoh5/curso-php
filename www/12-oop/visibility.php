<?php
  class Car {
    public $wheels = 4;
    private $window = "Sem película";

    public function factoryModeFilm($film) {
      $this->window = $film;
    }

    public function getWindow() {
      return $this->window;
    }
  }

  class Mechanic {
    public function changeWheels($car) {
      $car->wheels = 10;
    }

    public function putFilm($car, $film) {
      $car->window = $film;
    }
  }

  $car = new Car;
  echo $car->wheels . "<br/>";

  $bruno = new Mechanic;
  $bruno->changeWheels($car);

  echo $car->wheels . "<br/>";

  // Não pode alterar pois é privado
  // $bruno->putFilm($car, "G20");

  $car->factoryModeFilm("G10");

  echo $car->getWindow() . "<br />";