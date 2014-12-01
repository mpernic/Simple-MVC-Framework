<?php

class Animal {
  public $type = "animal";
  
  public function dance() {
    echo $this->type . "dances\n";
    return true;
  }

}


?>