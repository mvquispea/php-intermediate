<?php 

class Recipe 
{
  
  /**
  * Propiedades 
  * Las propiedades de una clase pueden ser publicas, privadas o protegidas
  **/
  private $ingredients = [];
  private $source = "Google";
  
  private $title;
  private $measure = [
    'unidad',
    'gramo',
    'kilo'
  ];
  
  public function __construct($title) {
    $this->title = $title;
  }
  
  public function __toString() {
    return $this->title;
  }
  
  public function __get($name) {
    return $this->$name;
  }
  
  public function __set($name, $value) {
    $this->$name = $value;
  }
  
  /**
  * Metodos
  * Los metodos de una clase pueden ser publicas, privadas o protegidas
  **/
  public function addIngredients($item, $amount, $measure) {
    
    if(!in_array($measure, $this->measure)) {
      exit("Por favor ingresar una medida valida: " . implode(", ", $this->measure));
    }
    
    $this->ingredients[] = [
      "item" => ucwords($item),
      "amount" => ucwords($amount),
      "measure" => ucwords($measure)
    ];
    
  }
  
  public function getIngredients() {
    return $this->ingredients;
  }
  
}
