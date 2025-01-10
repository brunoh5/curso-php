<?php
  class Human {
    public const EYES = 2;
    public const ARMS = 2;
    public const LEGS = 2;

    function showConstant() {
      echo self::ARMS . "<br />";
    }
  }

  $bruno = new Human;

  echo $bruno::EYES . "<br />";

  $bruno->showConstant();