<?php 

include "classes/recipe.php";
include "classes/render.php";

// Implementación Objecto 1
$recipe1 = new Recipe("Lomo saltado");
$recipe1->addIngredients("lomo de res", 600,  "gramo");
$recipe1->addIngredients("cebolla roja cortada en gajos", 1,  "unidad");
$recipe1->addIngredients("tomates cortados", 2,  "unidad");

echo Render::displayRecipe($recipe1);
