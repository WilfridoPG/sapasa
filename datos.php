
<?php
//Obtenemos los datos de los input
$domicilio = $_POST["domicilio"];
$usuario = $_POST["usuario"];
$medidor = $_POST["medidor"];
$lectura = $_POST["lectura"];
$observacion= $_POST["observacion"];
$longitud = $_POST["longitud"];
$latitud= $_POST["latitud"];

//Hacemos las comprobaciones que sean necesarias... (sanitizar los textos para evitar XSS e inyecciones de código, comprobar que la edad sea un número, etc.)
//Omitido para la brevededad del código
//PERO NO OLVIDES QUE ES ALGO IMPORTANTE.

//Seteamos el header de "content-type" como "JSON" para que jQuery lo reconozca como tal
header('Content-Type: application/json');
//Guardamos los datos en un array
$datos = array(
'domicilio' => $domicilio, 
'usuario' => $usuario, 
'medidor' => $medidor,
'lectura' => $lectura, 
'observacion' => $observacion,
'latitud' => $latitud, 
'longitud' => $longitud 
);
//Devolvemos el array pasado a JSON como objeto
echo json_encode($datos, JSON_FORCE_OBJECT);
?>