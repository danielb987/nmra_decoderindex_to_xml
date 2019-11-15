<?php

define('FPDF_FONTPATH', '../fpdf181/font');
require('../fpdf181/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Cell(40,20,'Daniel!');
$pdf->Output();

?>