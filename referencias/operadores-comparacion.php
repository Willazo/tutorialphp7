<?php
$numero1 = 2;
$numero2 = '2';

echo '<p> Supuesto 1. igual ==. </p>';
var_dump($numero1 == $numero2);

echo '<p> Supuesto 2. idéntico ===. </p>';
var_dump($numero1 === $numero2); // sera falso porque no son del mismo tipo

echo '<p> Supuesto 3. diferente != o &lt;&gt;. </p>';
var_dump(3 <> 2); // var_dump(3 != 2);

echo '<p> Supuesto 4. menor &lt;. </p>';
var_dump(1 < 2);

echo '<p> Supuesto 5. menor o igual &lt;=. </p>';
var_dump(1 <= 2);

echo '<p> Supuesto 6. Nave espacial &lt;&gt;.. </p>';
$a = 0;
$b = 1;
echo '<p> si a es menor que be, regresa -1, si a es igual que b regresa 0, si a es mayor que b regresa 1. </p>';
var_dump($a <=> $b);

echo '<p> Supuesto 7. Fusión de null. </p>';
$d = 'hola mundo';
$c = $d ?? $e ?? 'nada';
var_dump($c);

?>