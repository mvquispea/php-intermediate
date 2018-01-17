<?php 

include "classes/recipe.php";

// Implementación Objecto 1
$recipe1 = new Recipe();

// Acceso a las propiedades
echo $recipe1->source;

//Actualizar una propiedad
$recipe1->source = "Libro de recetas";
echo $recipe1->source;

// Implementación Objecto 2
$recipe2 = new Recipe();
// Acceso a las propiedades
echo $recipe2->source;

//Actualizar una propiedad
$recipe2->source = "Abuela";
echo $recipe2->source;
