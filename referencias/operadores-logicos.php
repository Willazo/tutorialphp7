<?php

$var1 = 10;
$var2 = 10;
$var3 = 5;
$var4 = 5;

/* AND (y)- true si todas las condiciones son verdaderas */
echo '<p> supuesto 1. Operadores: and && </p>';
var_dump($var1 == $var2 and $var3 == $var4);

/* OR (o inclusivo)- true si cualquiera de las condiciones es verdadera */
echo '<p> supuesto 2. Operadores: or || </p>';
var_dump($var1 > $var2 or $var3 == $var4);

/* XOR (o exclusivo)- true si sólo una de las condiciones es verdadera */
echo '<p> supuesto 3. Operadores: xor </p>';
var_dump($var1 == $var2 xor $var3 == $var4);

/* NOT - true si la condición no es verdadera */
echo '<p> supuesto 4. Operadores: ! </p>';
var_dump(!($var1 > $var2));