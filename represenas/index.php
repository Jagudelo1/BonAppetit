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
    $this->Cell(70,10,utf8_decode('Reporte de reseñas'),0,0,'C');
    // Salto de línea
    $this->Ln(20);

    // Arial bold 10
    $this->SetFont('Arial','B',10);
    //Títulos
    $this->Cell(10, 10, 'id', 1, 0, 'C', 0);
    $this->Cell(30, 10, 'nombre', 1, 0, 'C', 0);
    $this->Cell(40, 10, 'correo', 1, 0, 'C', 0);
    $this->Cell(80, 10, 'comentario', 1, 0, 'C', 0);
    $this->Cell(30, 10, 'fecha', 1, 1, 'C', 0);
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
$consulta = "SELECT * FROM resenas";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(10, 10, $row['id_resena'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['correo'], 1, 0, 'C', 0);
    $pdf->Cell(80, 10, $row['comentario'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['fecha'], 1, 1, 'C', 0);
}


$pdf->Output();
?>