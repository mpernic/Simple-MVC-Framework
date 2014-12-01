<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include ("classes/animal.php");
include ("classes/elephant.php");
include ("classes/penguin.php");

// creating object
$ele = new elephant();

// showing properties
print_r($ele);
// var_dump($ele);



// setting properties
$ele->colour = "blue";

// using properties
echo "The elephant is " . $ele->colour;


// calling methods
$ele->dance();



// next example

$tux = new Penguin();
$tux->dance();




?>