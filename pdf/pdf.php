<?php
    $name = $_GET['name'];
    $salary = $_GET['salary'];

    require_once('fpdf186/fpdf.php');

    $pdf = new FPDF();

    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,'Hello ' . $name);
    $pdf->Cell(80,40,'your misley pay is £ ' . $salary);
    $pdf->Output();






?>