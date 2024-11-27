<?php
/*
    Realizzare un script che riceve tramite REQUEST due chiavi chiamate
    'ValA' e 'ValB' con valori interi positivi maggiori di zero,
    lo script dopo aver verificato la validità dei valori visualizza
    la lista dei divisori comuni.
    es1. ValA=12 ValB=18 -> 1 2 3 6
    es2. ValA=-4 ValB=18 -> Valore/i errato/i
    es3. ValA=8 ValoreB= non c'e -> Chiave mancante o errata. 
 */

    echo('<!DOCTYPE HMTL>
        <html>
            <head>
                <meta charset = "UTF-8">
                <title>Prova di REQUEST HTTP</title>
            </head>
            <body>
    ');

    $ValA; // 6
    $ValB; // 18

    if(isset($_REQUEST['ValA'])) // la isset serve a vedere se hai dato un valore o meno sasso muori :)
        $ValA = $_REQUEST['ValA'];
    else
        $ValA = -1;


    if(isset($_REQUEST['ValB'])) // la isset serve a vedere se hai dato un valore o meno alberto muori :|
        $ValB = $_REQUEST['ValB'];
    else
        $ValB = -1;

    
    if($ValA < $ValB)
        $lunga = $ValB; // 18
    else
        $lunga = $ValA;

        if($ValA!=-1 || $ValB!=-1){
            for($i = 1; $i <= $lunga; $i++){
                if($ValA % $i == 0 &&  $ValB % $i == 0){
                    echo($i.' ');
                }
            }
        }
        else if($ValA < 0 || $ValB < 0){
            echo('Valori Minori di zero :( ');
        }
        else{
            echo(' La chiave è errata :( ');
        }
      
        echo('</body>
     </html>');
?>
