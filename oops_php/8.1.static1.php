<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }

  public function __construct() {
    self::welcome();
  }
}

new greeting();

//A class can have both static and non-static methods. 
//A static method can be accessed from a method in the 
//same class using the self keyword and double colon (::):
?>