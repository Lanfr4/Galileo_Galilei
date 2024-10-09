<?php
/**
 * Script che riceveuna chiave tramite HTTP REQUEST e 
 * ne utilizza il valore per visualizzare il contenuto
 * VINCOLO:
 * La chive si ceve chiamare 'val1'
 * 
 * http//....e2.php senza nessuna coppia chiave-valore eottengo un errore
 * invece
 * http//....e2.php?val1 = 23-> viene creato il vettore $_REQUEST dove
 * ci sara una chiave che si chiama val1 il cui contenuto è 23
 * 
 */
    if(isset($_REQUEST['val1']))  
        $dato = $_REQUEST['val1'];
    else
        $dato = -1;

    echo('Valore presente nella chiave: '.$dato);





?>


