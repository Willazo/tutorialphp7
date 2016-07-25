<?php
$sumar = 2 + 2;
echo "<p> La suma de 2 + 2 es: " . $sumar . "</p>";
$restar = 4 - 3;
echo "<p> La resta es: " . $restar . "</p>";
$negativos = -20 + -20;
echo "<p> La suma es: " . $negativos . "</p>";
$string = "12.4";
$sumar = 3 + $string;
echo "<p> La suma es: " . $sumar . "</p>";
echo "<p>sumar 4 + 4: " . (4+4) . "</p>";
$dividir = 4 / 2;
echo "<p>division es: " . $dividir . "</p>";
$multiplicar = 3 * 3;
echo "<p>multiplicacion es: " . $multiplicar . "</p>";
$resto = 3 % 2;
echo "<p>el resto es: " . $resto . "</p>";
$exponente = 2 ** 3;
echo "<p>el exponente es: " . $exponente . "</p>";
$precedencia= 3 + 3 * 3;
echo "<p>la precedencia es: " . $precedencia . "</p>";
$precedencia = (3+3)*3;
echo "<p>la nueva precedencia es: " . $precedencia . "</p>";
?>