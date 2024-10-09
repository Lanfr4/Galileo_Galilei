<?php
/*  Realizzare un script che riceve tramite REQUEST due chiavi chiamate
    'ValA' e 'ValB' con valori interi positivi maggiori di zero,
    lo script dopo aver verificato la validità dei valori visualizza
    la lista dei divisori comuni.
    es1. ValA=12 ValB=18 -> 1 2 3 6
    es2. ValA=-4 ValB=18 -> Valore/i errato/i
    es3. ValA=8 ValoreB=16 -> Chiave mancante o errata.
*/
    echo('<!DOCTYPE HMTL>
        <html>
            <head>
                <meta charset = "UTF-8">
                <title>Prova di REQUEST HTTP</title>
            </head>
            <body>
    ');
    if(isset($_REQUEST['ValA']))  
        $ValA = $_REQUEST['ValA'];
    else
        $ValA = -1;

    if(isset($_REQUEST['ValB']))  
        $ValB = $_REQUEST['ValB'];
    else
        $ValB = -1;

    if($ValA <= $ValB){
        $min = $ValA;
    }
    else{
        $min = $ValB;
        }

    if(($ValA!=-1)&& ($ValB!=-1)){
        if(($ValB >0) && ($ValA >0)){
            for($i=1;$i<=$min;$i++){
                if(($ValA % $i == 0) && ($ValB % $i == 0)){
                   echo('Divisore comune' .$i.'<br> '); 
                }
            }
        }
        else{
            echo('Hai inserito uno o piu valori negativi');
        } 
    }
    else{
        echo('Valori mancanti o  chive errata');
     }

     echo('</body>
     </html>');
?>
