<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 18
    $this->SetFont('Arial','B',18);
    //Logo
    $this->Image('img/icon.png',10,0,28);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte de platillos',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    // Arial bold 10
    $this->SetFont('Arial','B',10);
    //Títulos
    $this->Cell(60, 10, 'Nombre', 1, 0, 'C', 0);
    $this->Cell(30, 10, 'Estado', 1, 0, 'C', 0);
    $this->Cell(30, 10, 'Ventas', 1, 0, 'C', 0);
    $this->Cell(40, 10, 'Precio', 1, 0, 'C', 0);
    $this->Cell(30, 10, 'Ingresos', 1, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'conn.php';
$consulta = "SELECT nombre_platillo, precio, Estado, ventas, (precio * ventas) as ingresos from platillos ORDER BY ventas DESC";
$consultaT = "SELECT * from platillos ORDER BY ventas DESC limit 1";
$total = 0;
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(60, 10, utf8_decode($row['nombre_platillo']), 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['Estado'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['ventas'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['precio'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['ingresos'], 1, 1, 'C', 0);
    $total = $total + $row['ingresos'];
}
$pdf->Cell(155, 10, 'El total de ingresos es de:', 1, 0);
$pdf->Cell(5, 10, '$', 1, 0);
$pdf->Cell(30, 10, $total, 1, 1);

$result = $mysqli->query($consultaT);
while($fila = $result->fetch_assoc()){
    $pdf->Cell(160, 10, utf8_decode('El plato más vendido en el mes es: '), 1, 0);
    $pdf->Cell(30, 10, utf8_decode($fila['nombre_platillo']), 1, 1);
}
$pdf->Output();
?>