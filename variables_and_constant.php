<?php
/* video 1.3 - variables and constants */

//Variables

$firstname = "Prasad";
$firstname = "Joe";

echo $firstname."<br>"; //prints Joe

//defining constants

define("STATUS_PAID", "paid");

//define("STATUS_PAID", "paid"); //will throw an error

echo defined("STATUS_PAID"); //checks constant is defined or not. print 1

echo STATUS_PAID."<br>"; //prints paid

//defining constant using const keyword

const PAY_STATUS = 'paid';

echo PAY_STATUS.'<br>';

//Difference between const keyword and define function

//define function is excuted at runtime and const keyword at compile time 

if(true)
{ 
  //const WEBLINK = "hello weblink"; //throws error 
  define("MAINLINK", "hello mainlink");
}

$paid = 'PAID';

define('STATUS1_'. $paid, $paid);

echo STATUS1_PAID; //prints PAID

//predefined constant

echo PHP_VERSION; //prints 8.0.12

echo __LINE__; //prints 47

echo __FILE__; //prints C:\xampp\htdocs\php_tutorial\variables_and_constant.php

//variable variable

$foo = 'bar';

$$foo = 'baz';

echo $bar; //prints baz

echo "$foo, ${$foo}";

?>