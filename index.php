<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class MyCustomException extends Exception{
  public function errorMessage(){
    $errorMessage = 'Esta no es una direccion de email valida';
    return $errorMessage;
  }
}

$email = 'eduar@\haddadandpartners.com';

try{
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
    throw new MyCustomException($email);
  }
}catch(MyCustomException $e){
  echo $e->errorMessage();
}


//echo 'Fin de la aplicacion';
