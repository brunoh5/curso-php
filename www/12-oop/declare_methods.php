<?php
class Person
{
  function speak($name = null)
  {
    echo "Hello World $name";
  }

  function sum($x, $y)
  {
    echo $x + $y . "<br/>";
  }
}

$bruno = new Person;
$bruno->speak();
echo '<br>';
$bruno->speak('bruno');
echo '<br>';
$bruno->sum(1, 2);