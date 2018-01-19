<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

function checkIfInteger($num){
  if($num<0){
    throw new Exception('Debes insertar un entero');
  }else{
    return 'Si es un entero';
  }
}

$numbers = array(2, -5, 10);

foreach ($numbers as $value) {
  // echo checkIfInteger($value) . '<br>';
  try{
    echo checkIfInteger($value) . '<br>';
  }catch(Exception $e){
    echo 'Ha habido una excepcion: ' . $e->getMessage() . '<br>';
  }
}

echo 'Fin de la aplicacion';
