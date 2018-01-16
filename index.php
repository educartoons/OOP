<?php

include 'classes/Recipe.php';
include 'classes/Render.php';

$recipe = new Recipe();

$recipe->addIngredient('onions');
$recipe->addIngredient('potatoes');
$recipe->addIngredient('carrots');

echo Render::listIngredients($recipe);
