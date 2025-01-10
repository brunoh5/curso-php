<?php
class Animal {
  public $name;

  function pickName($name) {
    $this->name = $name;
  }

  function bark() {
    return "Au Au <br/>";
  }

  function hardBark() {
    return strtoupper($this->bark());
  }
}

$frida = new Animal;
echo "O nome do animal é: $frida->name <br/>";

$frida->pickName('Frida');

echo "O nome do animal é: $frida->name <br/>";

echo $frida->bark();

echo $frida->hardBark();