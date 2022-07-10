<?php //opening tag for php,php code goes here

/*This tutorial is for beginners and as well as for advanced
Reference : Youtube channel : Program with Gio
Youtube link : https://www.youtube.com/playlist?list=PLr3d3QYzkw2xabQRUpcZ_IBk9W50M9pe- 
*/

echo "Hello world<br>"; /*prints Hello world. echo used to print something.don't need semicolon if
only one statement in the file */

print "Hello world<br>"; /*prints Hello world. print has return value of one*/

echo print "Hello world<br>"; /*prints Hello world1. print could be used within expression*/

echo 'Hello', ' ', 'world<br>'; /*prints Hello world. echo  accepts multiple word*/

/*echo  is marginally faster than print*/

echo 'Joe\'s Invoice<br>'; //escape single quotes with backslash or used below syntax.

echo "Joe's Invoice<br>";

/*variable name cannot be start with numbers or special characters and you cannot use 'this' word 
to create variable

variable name can start with alphabhet or underscore '_'

variables in php are assigned by value demonstrated in eg. below

*/

$x = 1;
$y = $x;

$x = 3;

echo $y."<br>"; //will print 1 because variables are assigned by value.

$z = 1;
$a = &$z; //pass by reference

$z = 3;

echo $a."<br>"; //will print 3 because variable was pass by reference.

$fname = 'Prasad';

echo 'Hello $fname<br>'; //prints Hello $fname

echo "Hello $fname<br>"; // prints Hello Prasad. not readable you can use {$fname} for more readablity

echo 'Hello '.$fname."<br>"; //prints Hello Prasad. concatenation operator "." two combine string with variable.

//comments
//single line - "//", "#"
//multiline - /**/
//doc block - 
/**
*
*/


//php closing tag, don't need if file contains only php syntax  ?>

<!-- Embedding php in html -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php echo 'Hello world'; ?></h1>
  <!-- short hand version -->
  <!-- used only to print soemthing -->
  <h1><?= 'Hello world' ?></h1>
</body>
</html>