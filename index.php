<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$message = "Hey guys !";

$joel = function(){
  var_dump ($message);
};

// joel();

$eduar = function () use ($message){
  var_dump($message);
};

$eduar();
