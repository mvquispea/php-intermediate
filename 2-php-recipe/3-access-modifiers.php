<?php 

class Recipe 
{
  
  /**
  * Propiedades 
  * Las propiedades de una clase pueden ser publicas, privadas o protegidas
  **/
  public $title;
  public $ingredients = [];
  public $tag = [];
  public $source = "Google";
  
  /**
  * Metodos
  * Los metodos de una clase pueden ser publicas, privadas o protegidas
  **/
  public function displayRecipe() {
    return $this->title . " de " . $this->source . "\n";
  }
  
  public function setTitle($title) {
    $this->title = ucwords($title);
  }
  
}

$recipe1 = new Recipe();
$recipe1->setTitle("lomo saltado");
echo $recipe1->title;
echo $recipe1->displayRecipe();

// Cambiar la propiedad $title a private
$recipe2 = new Recipe();
$recipe2->title = "aji de gallina";
echo $recipe2->displayRecipe();