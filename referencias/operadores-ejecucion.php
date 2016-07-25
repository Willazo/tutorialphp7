<?php

//$output = `mkdir hola`; //creamos una carpeta llamada hola, hay que usar la comilla invertida porque se ejcutará por el shell
//$output = `rmdir hola`; //para eliminar la carpeta anterior

//$output = `notepad.exe`; //ejecuto este proceso

$output = shell_exec("notepad.exe"); //otra manera de ejecutarlo
echo $output;

