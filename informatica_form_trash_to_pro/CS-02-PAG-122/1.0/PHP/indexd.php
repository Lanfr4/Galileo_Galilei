<?php

// includo la libreria con funzioni necessarie all' interfaccia.
require('../include/lib.php');
//riciamo la funzione per la creazine della sezione iniziale delle pagine 
writeHeader();
writeMenu();
    //<<your code starts here>>
    echo('<div class ="alert alert-success"> Pare funzionare tutto! </div>');

    //<< end for your code >>
    
//richiamo la funzione per la creazione della sezione finale delle pagine
writeFooter(); 
?>