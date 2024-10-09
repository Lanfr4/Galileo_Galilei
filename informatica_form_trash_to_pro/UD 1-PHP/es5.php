<?php
/**
 * Realizzare uno script PHP che riceve un valore intero nel vettore
 * delle REQUEST con chiave 'Val'.
 * Lo script calcola e comunica il successivo numero primo
 * Formattare correttamente la pagina secondo lo standard HMTL
 * per visualizzare il risulatato
 */
    echo('<!DOCTYPE HMTL>
    <html>
        <head>
            <meta charset = "UTF-8">
            <title>Prova di REQUEST HTTP</title>
        </head>
        <body>
    ');

    if(isset($_REQUEST['Val']))  
        $Val = $_REQUEST['Val'];
    else
        $Val = -1;

        if($Val!=-1){
            if($Val > 0 ){
                
            }
            else{
                echo('Hai inserito un valore negativo');
            }
        }
        else{
            echo('Hai inserito una chiave sbagliata');
        }

    echo('</body>
    </html>');  