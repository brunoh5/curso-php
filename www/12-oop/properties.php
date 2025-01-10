<?php
  class Car {
    public $wheels = 4;
    public $rim = 13;
    public $color = 'Red';

    function start() {
      echo "Vrummmm <br/>";
    }
  }

  $ferrari = new Car;
  echo $ferrari->rim;
  echo "<br/>";
  echo $ferrari->wheels;
  echo "<br/>";
  $ferrari->color = "Green";
  echo $ferrari->color;
  echo "<br/>";
  $ferrari->start();