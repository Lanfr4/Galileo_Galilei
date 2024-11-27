<?php
/*Realizzare uno script PHP che riceve un valore intero nel vettore
 * delle REQUEST con chiave 'Val'.
 * Lo script calcola e comunica il successivo numero primo
 * Formattare correttamente la pagina secondo lo standard HMTL
 * per visualizzare il risultato */

    echo('<!DOCTYPE HMTL>
    <html>
        <head>
            <meta charset = "UTF-8">
            <title>Prova di REQUEST HTTP</title>
        </head>
        <body>
    ');

    $Val; // 6 7 8 9 10  stampo 7
    $radar = 0;
   

    if(isset($_REQUEST['Val'])) // la isset serve a vedere se hai dato un valore o meno sasso muori :)
        $Val = $_REQUEST['Val'];
    else
        $Val = -1;


    while($radar != 1){
        if($Val % 2 == 1 && $Val % 1 ==0 &&  $Val % $Val == 0){
            echo($Val.'');
            $radar = 1;
        }
        else{
            $Val +=1;
        }
    }
        
    echo('</body>
        </html>');  
?>  