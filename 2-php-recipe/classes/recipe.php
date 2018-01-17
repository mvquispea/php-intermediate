<?php 

class Recipe 
{
  
  /**
  * Propiedades 
  * Las propiedades de una clase pueden ser publicas, privadas o protegidas
  **/
  public $title;
  public $ingredients = [];
  public $source = "Google";
  
  /**
  * Metodos
  * Los metodos de una clase pueden ser publicas, privadas o protegidas
  **/
  public function displayRecipe() {
    return $this->title . " de " . $this->source . "\n";
  }
  
}

// Implementación
// $recipe1 = new Recipe();
// var_dump($recipe1);
