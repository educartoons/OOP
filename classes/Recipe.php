<?php

// namespace classes\Recipe;

class Initial
{
  public static function version()
  {
    echo '1.0.0';
  }
}

class Recipe
{

  public $ingredients = array();

  public function addIngredient($ing)
  {
    $this->ingredients[] = $ing;
  }

}
