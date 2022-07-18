<?php

/*OPERATORS*/

//Arithmetic operators (+, -, *, /, %, **)
// $x = 10;
// $y = 2;
// $z = 10;
// $a = 0;

// var_dump($x + $y); //prints int 12
// var_dump($x - $y); //prints int 8
// var_dump($x * $y); //prints int 20
// var_dump($x / $y); //prints int 5
// var_dump($x % $y); //prints int 0
// var_dump($x ** $y); //prints int 100

// var_dump(fdiv($z, $a)); //returns infinity value instead of error
// //both operands cast to integer during modulus

//Assignment operators (=, +=, -=, /=, %=, **=)
$x = 5;

$y = $z = 10;
var_dump($y, $z); //prints int 10

$x *= 5;
var_dump($x); //prints 25

//string operators
$b = 'hello';

echo $b.' prasad';

//Comparison operator

$c = 5;
$d = 3;

$e = 5;
$f = 5;

$g = 5;
$h = '5';

var_dump($c == $d); //prints false
var_dump($c === $d); //prints false

var_dump($e == $f); //prints true
var_dump($e === $f); //prints true

var_dump($g == $h); //prints true
var_dump($g === $h); //prints false




