<?php
//floating

$x = 13.5;
//can also written as 13.5e3 prints 

echo $x;
echo '<br>';

echo PHP_FLOAT_MAX;
echo '<br>';
echo PHP_FLOAT_MIN;

echo '<br>';

echo (float)(0.1+0.7)*10;
echo '<br>';

//never trust float for equality

$a = 0.23;
$b = 1-0.77;

var_dump($a, $b);

if($a == $b){
  echo 'yes';
}else{
  echo 'no';
}

//is_infinite() //to check infinity




