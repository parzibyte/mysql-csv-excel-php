<?php
include_once "funciones.php";

$personas = obtenerPersonas();

$nombreArchivoSalida = "personas.csv";

$contenidoCsv = "Id,Nombre,Edad,Altura\n";
foreach ($personas as $persona) {
    $contenidoCsv .= sprintf(
        "%d,%s,%d,%0.2f\n",
        $persona["id"],
        $persona["nombre"],
        $persona["edad"],
        $persona["altura"],
    );
}
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary");
header("Content-disposition: attachment; filename=$nombreArchivoSalida");
echo $contenidoCsv;
