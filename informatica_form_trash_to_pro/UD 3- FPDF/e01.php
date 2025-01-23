<?php

require('../../fpdf/fpdf.php');

$mypdf = new FPDF();

// Aggiungo una pagian al pdf
    $mypdf->AddPage();

    // imposto un carattere Arial a 14pt
    $mypdf->SetFont('Arial','',14);

    //Creazione di una cella

    $mypdf->Cell(50,10,'I am Atomic',1,0);

    $mypdf->Ln();

    for($i=1;$i<=10;$i++){
        for($j=1;$j<=10;$j++){
            $mypdf->Cell(15,10,$i*$j,1,0);
        }
        $mypdf->Ln();
    }

    $mypdf->Output();

?>