<?php
require __DIR__ . "/vendor/autoload.php";

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

include_once "funciones.php";
$personas = obtenerPersonas();
$documento = new Spreadsheet();
$documento
    ->getProperties()
    ->setTitle('Reporte de personas');

$hoja = $documento->getActiveSheet();

$hoja->setTitle("Personas");
$indiceFila = 1;
$indiceColumna = 1;
$columnas = ["id", "nombre", "edad", "altura"];
$encabezados = ["Id", "Nombre", "Edad", "Altura"];
foreach ($encabezados as $encabezado) {
    $hoja->setCellValue([$indiceColumna, $indiceFila], $encabezado);
    $indiceColumna++;
}
$indiceFila++;
foreach ($personas as $persona) {
    $indiceColumna = 1;
    foreach ($columnas as $columna) {
        $hoja->setCellValue([$indiceColumna, $indiceFila], $persona[$columna]);
        // La edad va como número
        if ($indiceColumna === 3) {
            $hoja->getStyle([$indiceColumna, $indiceFila])->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_NUMBER);
        }
        // La altura va con decimales
        if ($indiceColumna === 4) {
            $hoja->getStyle([$indiceColumna, $indiceFila])->getNumberFormat()->setFormatCode(NumberFormat::FORMAT_NUMBER_00);
        }
        $indiceColumna++;
    }
    $indiceFila++;
}

$nombreDelDocumento = "Reporte de personas.xlsx";
/**
 * Los siguientes encabezados son necesarios para que
 * el navegador entienda que no le estamos mandando
 * simple HTML
 * Por cierto: no hagas ningún echo ni cosas de esas; es decir, no imprimas nada
 */
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $nombreDelDocumento . '"');
header('Cache-Control: max-age=0');

$writer = IOFactory::createWriter($documento, 'Xlsx');
$writer->save('php://output');
exit;
