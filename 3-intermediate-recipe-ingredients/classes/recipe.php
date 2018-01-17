<?php 

class Recipe 
{
  
  /**
  * Propiedades 
  * Las propiedades de una clase pueden ser publicas, privadas o protegidas
  **/
  public $ingredients = [];
  public $source = "Google";
  
  private $title;
  private $measure = [
    'unidad',
    'gramo',
    'kilo'
  ];
  
  /**
  * Metodos
  * Los metodos de una clase pueden ser publicas, privadas o protegidas
  **/
  public function displayRecipe() {
    return $this->title . " de " . $this->source . "\n";
  }
  
  // Controlar el accesso a Ingredients
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
  
  public function setTitle($title) {
    $this->title = ucwords($title);
  }
  
  public function getTitle() {
    return $this->title;
  }
  
}
