<?php
$variable = null;

//Array unidimensionales
$array_1 = array(1, 2, 3, 4, 5, "string", 3.14, true, "más elementos"); //forma larga
$array_2 = [1,2,3,4,5]; //forma corta

var_dump($array_1); //ver el contenido del array

echo "<p> Accediendo al primer elemento del array_1: " . $array_1[0] . "</p>";
echo "<p> Accediendo al quinto elemento del array_1: " . $array_1[5] . "</p>";
echo "<p> total de elementos del array_2: " . count($array_2) . "</p>";

$array_2[1] = "Me has cambiado de valor";
echo "<p> Accediendo al segundo elemento del array_2 cambiado --> " . $array_2[1] . "</p>";


//Arrays multidimensionales
$array_3 = ['uno', 2, ['tres', 'cuatro', [5, 6]], $array_2];
var_dump($array_3); //ver el contenido del array

echo "<p>" . $array_3[2][1] . "</p>";
echo "<p>" . $array_3[2][2][1] . "</p>";
echo "<p>" . $array_3[3][4] . "</p>";

//Arrays asociativos
$array_4 = ['uno' => 1, 'dos' => 2, 3 => 'hola', 'array' => $array_2, 'array1' =>['uno', 'dos']];
var_dump($array_4); //ver el contenido del array
echo "<p> Accediendo al segundo elemento del array_4: " . $array_4['dos'] . "</p>";
echo "<p> Accediendo al tercer elemento del array_4: " . $array_4[3] . "</p>";
$array_4[3] = 'cambiando el valor';
echo "<p> Cambiando al tercer elemento del array_4: " . $array_4[3] . "</p>";

echo "<p>" . $array_4['array'][0] . "</p>";
echo "<p>" . $array_4['array1'][1] . "</p>";

?>