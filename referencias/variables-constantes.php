<?php

$boolean = true; //variable booleana
$integer = -20; //vairable entera
$float = -45.12; //variable flotante o real
$string = "string entre comillas dobles"; //variable string
$string_2 = 'string entre comillas simples';

echo "<p>$boolean</p>"; //con comillas dobles te devuelve el valor
echo "<p>$integer</p>";
echo "<p>$float</p>";
echo "<p>$string</p>";
echo "<p>$string_2</p>";
echo '<p>$string_2</p>'; //muestra el nombre de la variable si tiene comillas simples

echo '<p>' . $integer . '</p>'; //concatenar strings, con el punto y comillas simples
echo "<p>" . $integer . "</p>" . "<strong>valor entero </strong>"; //concatenar strings, con el punto y comillas dobles

$integer = 3;
echo "<p>$integer</p>";

//constantes
define("pi", 3.14);
echo "<p>" . pi . "</p>";

define("pi", 2); //a pesar de cambiarlo se mantiene el valor anterior al ser una constante
echo "<p>" . pi . "</p>";
?>