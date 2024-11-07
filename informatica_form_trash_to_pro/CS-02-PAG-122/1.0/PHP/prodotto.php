<?php
if(isset($_REQUEST['scelta']))  $sc = $_REQUEST['scelta']; else $sc = null;
// includo la libreria con funzioni necessarie all' interfaccia.
require('../include/lib.php');
//riciamo la funzione per la creazine della sezione iniziale delle pagine 
writeHeader();
writeMenu();

    //<<your code starts here>>
        switch($sc){
            case "listaProdotto":{
                echo('Contenuto della Tabella Prodotto: <br />');
                // questo case deve aprire un flusso con mySQL, qundi eseguire
                // una query per visualizzare il contenuto della tabella PRODOTTO, con o senza tabella bootstrap
                $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
                $sql = "SELECT * FROM prodotto";
                $risultSet = $db->query($sql);
                
                while($record = $risultSet->fetch_assoc()){
                    echo($record[id].' '.$record['descrizione'].'<br />');
                }
                $db->close();
                break;
            }
        }
    //<< end for your code >>
    
//richiamo la funzione per la creazione della sezione finale delle pagine
writeFooter(); 
?>