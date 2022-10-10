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
    $this->Cell(70,10,'Reporte de facturas',0,0,'C');
    // Salto de línea
    $this->Ln(20);

    // Arial bold 10
    $this->SetFont('Arial','B',10);
    //Títulos
    $this->Cell(30, 10, 'Id_Factura', 1, 0, 'C', 0);
    $this->Cell(35, 10, 'Id_Cliente', 1, 0, 'C', 0);
    $this->Cell(30, 10, 'Id_Categoria', 1, 0, 'C', 0);
    $this->Cell(30, 10, 'Id_Reserva', 1, 0, 'C', 0);
    $this->Cell(30, 10, 'Id_Platillo', 1, 0, 'C', 0);
    $this->Cell(35, 10, 'Fecha', 1, 1, 'C', 0);
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
$consulta = "SELECT * FROM factura_ventas";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(30, 10, $row['Id_Factura'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['Id_Cliente'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['Id_Categoria'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['Id_Reserva'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10, $row['Id_Platillo'], 1, 0, 'C', 0);
    $pdf->Cell(35, 10, $row['Fecha'], 1, 1, 'C', 0);
}


$pdf->Output();
?>