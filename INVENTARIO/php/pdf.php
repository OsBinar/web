<?php
require('http://localhost/INVENTARIO/index.php?vista=product_category&category_id=2./fpdf.php');
 
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();
?>