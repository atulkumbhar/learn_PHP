<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>

<!--
A class is defined by using the class keyword,
 followed by the name of the class and a pair
 of curly braces ({}). All its properties and
 methods goes inside the braces:
 
 Below we declare a class named Fruit consisting 
 of two properties ($name and $color) and two methods 
 set_name() and get_name() for setting and getting the
 $name property:



Classes are nothing without objects! We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values.

Objects of a class is created using the new keyword.

In the example below, $apple and $banana are instances of the class Fruit:

we add two more methods to class Fruit, for setting and getting the $color property:
-->
