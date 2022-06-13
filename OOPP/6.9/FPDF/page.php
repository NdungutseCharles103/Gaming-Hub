<?php

require("fpdf.php");
$pdf =  new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
// $pdf->Write(5,'Hello World!');
$pdf->Cell(40,10,'Hello World ! Again',1);
$pdf->Cell(60,10,'Powered by FPDF.',0,1,'C');
$pdf->Output();


echo "Done";


?>