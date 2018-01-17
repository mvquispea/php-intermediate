<?php 

class Bike
{
  
  public $color;
  public $gear;
  public $speed;
  
  public function go() {
    echo "Avanzando";
  }
  
  public function break() {
    echo "Frenando";
  }
  
  public function changeGear($gear) {
    $this->gear = $gear;
  }
  
  public function changeSpeed($speed) {
    $this->speed = $speed;
  }
  
  public function __toString() {
    return "Bicicleta";
  }
  
}
