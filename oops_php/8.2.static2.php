<?php

//To call a static method from a child class, 
//use the parent keyword inside the child class. 
//Here, the static method can be public or protected.
class domain {
  protected static function getWebsiteName() {
    return "www.bharatitech.in";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();//use the parent keyword inside the child class.
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>