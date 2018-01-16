<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'classes/Recipe.php';
include 'vendor/Render/Render.php';

use vendor\Render\Render as Render;

$recipe = new Recipe();

$recipe->addIngredient('onions');
$recipe->addIngredient('potatoes');
$recipe->addIngredient('carrots');

echo Render::listIngredients($recipe);
