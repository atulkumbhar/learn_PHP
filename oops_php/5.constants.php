<?php
class Goodbye {
  const LEAVING_MESSAGE = "Welcome to OOPS in PHP!"."<br>";
  public function byebye() {
    echo self::LEAVING_MESSAGE; //we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name
  }
}
echo Goodbye::LEAVING_MESSAGE; //We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name
$goodbye = new Goodbye();
$goodbye->byebye();
?>