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

//Comparison operator (==, ===, !=, <>, !==, <, >, =<, >=, <=>, ?? ?:)

$c = 5;
$d = 3;

$e = 5;
$f = 5;

$g = 5;
$h = '5';

$j = 10;
$k = 10;

$l = 11;
$m = 12;

$n = 13;
$o = 12;

var_dump($c == $d); //prints false
var_dump($c === $d); //prints false

var_dump($e == $f); //prints true
var_dump($e === $f); //prints true

var_dump($g == $h); //prints true
var_dump($g === $h); //prints false

var_dump(1+'1');
echo '<br>';

//spaceship operator
var_dump($j <=> $k); //prints int(0)
var_dump($l <=> $m); //prints int(-1)
var_dump($n <=> $o); //prints int(1)

//Ternary operator
$p = 'Hello world';
$q = strpos($p, 'H');
echo "<br>";
var_dump($q);

$result = $q === false ? 'H Not Found' : 'H Found at line ' .$q;  
var_dump($result); //prints "H Found at line 0"

//same as above using if else
if($q === false)
{
  echo "H not found";
}else{
  echo "H found at line ".$q; 
}

//null coalescing operator (mainly used to avoid undefined operator - ??)
$r = null;
$s = $r ?? 'Hello';
var_dump($s); //string(5) "Hello"

//error control operator(@)
$q = file('text.txt'); //Warning: file(text.txt): Failed to open stream: No such file or directory in C:\xampp\htdocs\php_tutorial\operators.php on line 95
$q = @file('text.txt'); //prints nothing

//increment and decrement operators

$x = 1;
$y = 2;
echo "<br>";
echo $x++; //prints 1
echo $x; //prints2 (The post increment first assign value and then increment)

echo ++$y; //prints 3 (The pre increment first increments and then assign)

//logical operator(&& || ! and or xor)
//and or keyword have lower precendence





