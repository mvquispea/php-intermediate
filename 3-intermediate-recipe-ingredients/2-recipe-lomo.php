<?php 

include "classes/recipe.php";

// Implementación Objecto 1
$recipe1 = new Recipe();
$recipe1->setTitle("Lomo saltado");
$recipe1->addIngredients("lomo de res", 600,  "gramo");
$recipe1->addIngredients("cebolla roja cortada en gajos", 1,  "unidad");
$recipe1->addIngredients("tomates cortados", 2,  "unidad");

echo $recipe1->getTitle();
foreach($recipe1->getIngredients() as $ingredient) {
  echo "\n";
  echo $ingredient["amount"] . " " . $ingredient["measure"] . " " . $ingredient["item"];
}

echo "\n";

// Implementación Objecto 1
$recipe2 = new Recipe();
$recipe2->setTitle("Aji de gallina");
$recipe2->addIngredients("pechuga de gallina", 1,  "unidad");
$recipe2->addIngredients("ajíes amarillos peruanos", 3,  "unidad");
$recipe2->addIngredients("cebolla grande", 1,  "unidad");

echo $recipe2->getTitle();
foreach($recipe2->getIngredients() as $ingredient) {
  echo "\n";
  echo $ingredient["amount"] . " " . $ingredient["measure"] . " " . $ingredient["item"];
}