<?php 

include "classes/recipe.php";

// Implementación Objecto 1
$recipe1 = new Recipe();
$recipe1->addIngredients("Sal", 2,  "gramo");

$ingredients = $recipe1->getIngredients();
