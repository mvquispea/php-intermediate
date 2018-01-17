<?php 

class Render 
{
  
  public static function listIngredients($ingredients) {
    foreach($ingredients as $ingredient) {
      $output .= "\n";
      $output .= $ingredient["amount"] . " " . $ingredient["measure"] . " " . $ingredient["item"];
    }
    
    return $output;
  }
  
  public static function displayRecipe($recipe) {
    $output = "";
    
    $output .= $recipe->title . " de " . $recipe->source;
    $output .= "\n";
    $output .= self::listIngredients($recipe->getIngredients());
    return $output;
  }
  
}