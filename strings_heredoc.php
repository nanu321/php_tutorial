<?php

/*STRINGS*/

$firstName = 'Will';
$x = 1;
//Heredoc (Treat string as in double quotes i.e variables can be writen inside string).
$text = <<<TEXT
Line 1 $x
Line 2
Line 3
TEXT;

echo nl2br($text); /*prints 
                    Line 1 1
                    Line 2
                    Line 3
                   */

//Nowdoc
$text = <<<'TEXT'
Line 1 $x
Line 2
Line 3
TEXT;

echo '<br>';
echo nl2br($text); /*prints 
                    Line 1 $x
                    Line 2
                    Line 3
                    */

