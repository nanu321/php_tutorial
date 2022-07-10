<?php
//video 1.4
declare(strict_types=1); //doesn't allow type conversion dynamically during type hinting

/*Data types & Type casting*/

# 4 scalar types
  # bool - true/ false
  $completed = true;
  # int - 1,2,0, -5 (no decimal)
  $score = 78;
  # float - 1.2, 0.8, -7.5
  $price = 8.99;
  # string - 'hello word'
  $greeting = "Hello world";

  var_dump($completed);
  var_dump($score);
  var_dump($price);
  var_dump($greeting); //prints bool(true) int(78) float(8.99) string(11) "Hello world" 

  echo gettype($completed); //prints boolean

  echo $completed; //prints 1 if true, prints nothing if false

# 4 compound types

  # array
  $companies = [1, 2, 3, 4, 9.2, 'hello', true];
  echo $companies; // throws error "Warning: Array to string conversion in C:\xampp\htdocs\php_tutorial\data_types_casting.php on line 28"
  print_r($companies); //prints Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 9.2 [5] => hello [6] => 1 ) 
  echo "<br>";
  # object
  # callable
  # iterable

# 2 special types

  # resource
  # null


//type hinting



function sum ($x, $y)
{ 
  //var_dump($x, $y);
  return $x+$y;
}

//echo sum(2,3); //int(2) int(3) 5

$sum = sum(2, '3'); //int(2) string(1) "3" 5

echo $sum; //prints 5

var_dump($sum); //prints int(5) 

//type hinting

function sum1(int $x, int $y) //accept only integer gets converted to int 
{
  var_dump($x, $y);
  return $x+$y;
}

//echo sum1(2, '3'); 
echo "<br>";
/*
int(2) int(3) 5, 3 gets converted to integer. 
Note : if strict type enable throws error Fatal error: 
Uncaught TypeError: sum1(): Argument #2 ($y) must be of type int, string given, 
called in C:\xampp\htdocs\php_tutorial\data_types_casting.php on line 68 
and defined in C:\xampp\htdocs\php_tutorial\data_types_casting.php:62 
Stack trace: #0 C:\xampp\htdocs\php_tutorial\data_types_casting.php(68): 
sum1(2, '3') #1 {main} thrown in C:\xampp\htdocs\php_tutorial\data_types_casting.php 
on line 62 
*/

//type casting

$x = (int)'5';

var_dump($x);

?>