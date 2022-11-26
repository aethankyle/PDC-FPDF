<?php
include "vendor/autoload.php";


use Fpdf\Fpdf;

class PDF extends Fpdf
{
    // Page header
    function Header()
    {

        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(45, 10, 'MY QUOTES', 0, 0, 'C');
        // Line break
        $this->Ln(20);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->AddFont("BADABB__");
$pdf->SetFont('BADABB__', '', 35);
$pdf->Cell(0,10,'THE PURPOSE OF OUR LIFE IS TO BE HAPPY ',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf->AddFont("BADABB__");
$pdf->SetFont('BADABB__', '', 35);
$pdf->Cell(0,10,'LIFE WITHOUT PASSION IS LIKE BEING DEAD ',0,1);
$pdf->SetFont('Times', '', 12);
$pdf->Cell(0,10,'All The Pain Forced Me To Grow Up ',0,1);
$pdf->SetFont('Arial', '', 12);
$pdf->AddFont("BADABB__");
$pdf->SetFont('BADABB__', '', 20);
$pdf->Cell(0,10,'If You Don’t Share Someone’s Pain, You Can Never Understand Them',0,1);
$pdf->Output();