<?php 

class Render 
{
  
  public static function displayRecipe($recipe) {
    $output = "";
    
    $output .= $recipe->title . " de " . $recipe->source;
    $output .= "\n";
    foreach($recipe1->getIngredients() as $ingredient) {
      $output .= "\n";
      $output .= $ingredient["amount"] . " " . $ingredient["measure"] . " " . $ingredient["item"];
    }
    
    return $output;
  }
  
}