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
    $this->Cell(70,10,'Reporte de reservas',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    // Arial bold 10
    $this->SetFont('Arial','B',9);
    // Movernos a la derecha
    $this->Cell(4);
    //Títulos
    $this->Cell(25, 10, 'id_reserva', 1, 0, 'C', 0);
    $this->Cell(25, 10, 'Fecha', 1, 0, 'C', 0);
    $this->Cell(25, 10, 'Hora', 1, 0, 'C', 0);
    $this->Cell(25, 10, 'Mesa', 1, 0, 'C', 0);
    $this->Cell(45, 10, 'Descripcion', 1, 0, 'C', 0);
    $this->Cell(35, 10, 'Estado', 1, 1, 'C', 0);
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
$consulta = "SELECT * FROM reservas";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);

while($row = $resultado->fetch_assoc()){
    // Movernos a la derecha
    $pdf->Cell(4);

    $pdf->Cell(25, 10, $row['id_reserva'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['Fecha'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['Hora'], 1, 0, 'C', 0);
    $pdf->Cell(25, 10, $row['Mesa'], 1, 0, 'C', 0);
    $pdf->Cell(45, 10, $row['Descripcion'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['Estado'], 1, 1, 'C', 0);
}


$pdf->Output();
?>