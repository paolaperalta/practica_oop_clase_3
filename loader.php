<?php
  function dd($param){
    echo "<pre>";
    die(var_dump($param));
  }

require 'cliente.php';
require 'persona.php';
require 'pyme.php';
require 'multinacional.php';
require 'cuenta.php';
require 'classic.php';
require 'gold.php';
require 'platinum.php';
require 'black.php';

$persona1= new Persona ('Paola','Peralta','29152009','peraltapaola@gmail.com','12345');




dd(($persona1)->getEmail());
