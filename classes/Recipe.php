<?php

class Recipe
{

  public $ingredients = array();

  public function addIngredient($ing)
  {
    $this->ingredients[] = $ing;
  }

}
