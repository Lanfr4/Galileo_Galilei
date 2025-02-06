<?php
session_start();
    require('../../../../fpdf/fpdf.php');

    $DBHOST = "localhost";
    $DBUSER = "root";
    $DBPASSWORD = "root";
    $DBNAME = "cs02pag122";

    $mypdf = new FPDF();

    $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 
    $sql = "SELECT * FROM prodotto";
    $resultSet = $db->query($sql);

    $mypdf->AddPage();
    // INTESTAZIONE
            $mypdf->SetFont('Arial', 'B',18);
            $mypdf->Cell(160,10,"Import-Export s.n.c",0,'C');
            $mypdf->Ln();
            $mypdf->SetFont('Arial','B',14);
            $mypdf->Cell(160,10,"Sede Legale : Via della Resilienza, 18 - 46036 Ostiglia(MN)",0,'C');
            $mypdf->Ln();
            $mypdf->SetFont('Arial','B',12);
            $mypdf->Cell(160,10,"sito: http://www.impexp.it - mail: info@impexp.it",0,'C');
            $mypdf->Ln();
            $mypdf->Ln();

    // TABELLA

            $mypdf->SetFont('Arial','',14);
            $mypdf->Cell(10,10,"ID",'C');
            $mypdf->Cell(40,10,"DESCRIZIONE",'C');
            $mypdf->Ln();

            while($record = $resultSet->fetch_assoc()){
                $mypdf->Cell(10,10, $record['id'],1,'C',1);
                $mypdf->Cell(40,10, $record['descrizione'],1,'C');
                $mypdf->Ln();

            }


    // FOOTER
    
    $mypdf->Output();
    


?>