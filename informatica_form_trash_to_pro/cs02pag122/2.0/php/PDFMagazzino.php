<?php
session_start();
    require('../../../../fpdf/fpdf.php');

    $DBHOST = "localhost";
    $DBUSER = "root";
    $DBPASSWORD = "root";
    $DBNAME = "cs02pag122";

    $mypdf = new FPDF();


            $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 
            $sql = "SELECT * FROM magazzino";
            $resultSet = $db->query($sql);

            $mypdf->AddPage();

            $mypdf->SetFont('Arial','',14);

            while($record = $resultSet->fetch_assoc()){
                $mypdf->Cell(30,10, $record['id'],1,0);
                $mypdf->Cell(60,10, $record['nome'],1,0);
                $mypdf->Cell(30,10, $record['citta'],1,0);
                $mypdf->Cell(30,10, $record['provincia'],1,0);

                $mypdf->Ln();

            }

            $mypdf->Output();


?>