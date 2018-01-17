<?php

// namespace classes\Recipe;

class Recipe
{

  private $title;

  public $ingredients = array();

  public function __construct($title = null){
    $this->title = $title;
  }

  public function __toString(){
    $output = "You are calling a ". __CLASS__ . " object with the title <br>";
    $output .= $this->getTitle() . "<br>";
    $output .= "It is stored in " . basename(__FILE__) . " at " . __DIR__ . "/.<br>";
    $output .= "This is display in from line " . __LINE__ . " in method " . __METHOD__ . " <br>";
    $output .= "The following methods are available for objects of this class <br>";
    $output .= implode("<br>", get_class_methods(__CLASS__));
 
    return $output;
  }

  public function getTitle(){
    return $this->title;
  }

  public function addIngredient($ing)
  {
    $this->ingredients[] = $ing;
  }

  public function deleteIngredient($ing)
  {
    return null;
  }

}
