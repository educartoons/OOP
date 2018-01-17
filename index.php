<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'classes/Recipe.php';
include 'vendor/Render/Render.php';

use vendor\Render\Render as Render;

$recipe = new Recipe('BBQ Wings');

$recipe->addIngredient('onions');
$recipe->addIngredient('potatoes');
$recipe->addIngredient('carrots');

// echo $recipe->getTitle() . '<br>';
//
// echo Render::listIngredients($recipe);

echo $recipe;
// var_dump($recipe);
