<?php 

class Electric extends Bike
{
  
  public function turnOn() {
    echo "Motor encendido";
  }
  
  public function turnOff() {
    echo "Motor apagado";
  }
  
  public function getBattery() {
    return $this->battery;
  }
  
  public function __toString() {
    return "Moto electrica";
  }
  
}