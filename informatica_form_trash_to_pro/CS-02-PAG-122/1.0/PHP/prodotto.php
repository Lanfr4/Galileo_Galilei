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

            case "formNuovoProdotto":{
                //crea il form HTML/Bootstrap per l' inserimento dei dati di un prodotto
                echo('
                    form action ="prodotto.php">
                        <div class="mb-3">
                            <label for="exampleInputDescrizione" class="form-label">Descrizione Prodotto</label>
                            <input type="text" class="form-control" id="inputDescrizione" aria-describedby="Descrizione Help">
                            <div id="descrizioneHelp" class="form-text">Inserisci la descrizione del prodotto da inserire.</div>
                        </div>
                        <inpput type="hidden" name"scelta" value ="aggiungiProdotto">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    ');
                break;
            }

            case "aggiungiProdotto":{
                /* Case richiamnto dal form di inserimento nuovo prodotto, quindi
                    nel vettore $_REQUEST[] avro la chiave 'descrizione' con contenuto il testo immesso
                    nella casella del form
                */
                $desc = $_REQUEST['descrizione'];
                $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);

                $sql = "INSERT INTO prodotto(descrizione) VALUES('$desc')";
                if($db->query($sql)){
                    echo('<div class="alert alert-success"> Nuovo prodotto aggiunto.</div>');
                }
                else{
                    echo('<div class="alert alert-warning"> Problema in aggiunta nuovo prodotto.</div>');
                }
                break;
            }
        }
    //<< end for your code >>
    
//richiamo la funzione per la creazione della sezione finale delle pagine
writeFooter(); 
?>