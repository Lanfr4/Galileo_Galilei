<?php

    require("../../../../fpdf/fpdf.php");
    require("../include/lib.php");

    $mypdf -> AddPage();

    $i=0;

    $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME); 
    $sql = "SELECT * FROM magazzino ORDER BY nome";
    $resultSet = $db->query($sql);

    $mypfd->Cell(10,10,"ID",1,0,'C');
    $mypfd->Cell(70,10,"Nome",1,0,'C');
    $mypfd->Cell(80,10,"Città",1,0,'C');
    $mypfd->Cell(30,10,"Provincia",1,0,'C');
    $mypdf->Ln();


    while($record = $resultSet-> fetch_assoc()){
        $mypfd->Cell(10,10,$record['id'],1,0,'C');
        $mypfd->Cell(70,10,$record['nome'],1,0);
        $mypfd->Cell(80,10,$record['città'],1,0);
        $mypfd->Cell(30,10,$record['provincia0'],1,0,'C');
        $mypdf->Ln();
        $i++;
    }

    // Sotto la tabella numero dei magazzini a video
    $mypdf->Ln();
    $mypdf->Cell(20,10,"Num Magazzini",0,1,'c');
    $mypdf->Cell(20,10,$i,0,1,'C');


    $mypdf -> Output();
?>