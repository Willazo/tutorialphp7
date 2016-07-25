<?php

//Strings. Operador de concatenación '.'
$string1 = 'hola ';
$string2 = $string1 . 'mundo';
echo '<p>' . $string2 . '</p>';

//precedencia
$string3 = 'la suma total de 2+2 = ' . (2+2);
echo '<p>' . $string3 . '</p>';

//operador de asignación sobre concatenación '.='
$string4 = 'político ';
$string4 .= 'corrupto ';
$string4 .= 'y ladrón';
echo '<p>' . $string4 . '</p>';

//comparar arrays
$a = [0,1,2];
$b = ['0','1','2'];

//operador de igualdad: TRUE si $a y $b tienen las mismas parejas clave/valor
echo '<p> Operador de igualdad == </p>';
var_dump($a == $b);

/*
Operador de idéntico: TRUE si $a y $b tienen las mismas parejas clave/valor en el mismo orden y de los mismos tipos
*/
echo '<p> Operador de idéntico === </p>';
var_dump($a === $b);


/*
Operador de desigualdad: TRUE si $a no es igual a $b
*/
echo '<p> Operador de desigualdad != &lt;&gt; </p>';
var_dump([0,1,2] != [0,2,1]);

echo '<p>otra desigualdad != &lt;&gt; </p>';
var_dump([0,1,2] != ['0','1','2']);
