<?php

namespace vendor\Render;

class Initial
{
  public static function version()
  {
    echo '1.0.0';
  }
}

class Render
{
  public static function listIngredients($recipe)
  {
    $output = '';
    foreach ($recipe->ingredients as $key => $value) {
      $output .= SELF::uppercase($value) . "<br>";
    }
    return $output;
  }

  public static function uppercase($value)
  {
    return ucwords($value);
  }
}
