<?php 

include "classes/recipe.php";

// Implementación Objecto 1
$recipe1 = new Recipe();
$recipe1->title = "Arroz con pollo";
echo $recipe1->displayRecipe();

// Implementación Objecto 2
$recipe2 = new Recipe();
$recipe2->title = "Lomo saltado";
$recipe2->source = "Abuela";
echo $recipe2->displayRecipe();