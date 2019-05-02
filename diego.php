<?php

$id = $_POST["id"];
$tiempo = $_POST["tiempo"];
$minuto = $_POST["minuto"];
$hora = $_POST["hora"];
$clave = $_POST["clave"];

$archivo = fopen("archivo.txt", "w") or die echo "no se abrio";;
$espacio = " ";

fwrite($archivo, $id);
fwrite($archivo, $espacio);
fwrite($archivo, $tiempo);
fwrite($archivo, $espacio);
fwrite($archivo, $minuto);
fwrite($archivo, $hora);
fwrite($archivo, $espacio);
fwrite($archivo, $clave);
fwrite($archivo, $espacio);
fclose($archivo);

echo "success";

?>
