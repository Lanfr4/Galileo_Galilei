<?php
session_start();
    require('../../../../fpdf/fpdf.php');
    require('../include/libUser.php');

    $DBHOST = "localhost";
    $DBUSER = "root";
    $DBPASSWORD = "root";
    $DBNAME = "cs02pag122";

    $mypdf = new FPDF();

    $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 
    $sql = "SELECT * FROM prodotto";
    $resultSet = $db->query($sql);

    $mypdf->AddPage();

    $mypdf->SetFont('Arial','',14);

    while($record = $resultSet->fetch_assoc()){
        $mypdf->Cell(30,10, $record['id'],1,0);
        $mypdf->Cell(30,10, $record['descrizione'],1,0);
        $mypdf->Ln();

    }

    $mypdf->Output();


?>