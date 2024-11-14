<?php
/** Questa pagina sarà adibita alla gestione della tabella PRODOTTO */

if(isset($_REQUEST['scelta'])) $sc = $_REQUEST['scelta']; else $sc = null;

// includo la libreria con funzioni necessarie all'interfaccia.
require('../include/lib.php');
// richiamo la funzione per la creazione della sezione iniziale delle pagine
writeHeader();
writeMenu();

    // << your code start here >>
        switch($sc){
            case "listaMagazzino":{
                //echo('Contenuto della tabella Prodotto:<br />');
                // questo case deve aprire un flusso con mysql, quindi eseguire una query
                // per visualizzare il contenuto della tabella PRODOTTO, con o senza tabella bootstrap.
                $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
                $sql = "SELECT * FROM magazzino";
                $resultSet = $db->query($sql);

                /*while($record = $resultSet->fetch_assoc()){
                    echo($record['id'].' '.$record['descrizione'].'<br />');    
                }*/
                echo('<table class="table table-striped table-hover ">
                    <caption>Lista dei magazzino disponibili</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nome</th>
                            <th scope="col"> citta</th>
                            <th scope="col">provincia</th>
                            <th scope="col">Gestione</th>
                        </tr>
                    </thead>
                    <tbody>                
                ');
                    while($record = $resultSet->fetch_assoc()){
                        echo('<tr>
                                <th scope="row">'.$record['id'].'</th>
                                <td>'.$record['nome'].'</td>
                                <td>'.$record['citta'].'</td> 
                                <td>'.$record['provincia'].'</td>
                                <td><a href="magazzino.php?scelta=deleteMagazzino&idMagazzino='.$record['id'].'">
                                        <button type="button" class="btn btn-primary">Cancella</button>
                                    </a>
                                </td>
                            </tr>
                        ');  
                    }
                echo('</tbody>
                </table>');

                /* per poter veddere di nuovo i risultati devo ri-eseguire di nuovo la query 
                    e ri-creare di nuovo la resultSet
                echo('<br /><br />');
                $resultSet = $db->query($sql);
                while($record = $resultSet->fetch_assoc()){
                    echo($record['id'].' '.$record['descrizione'].'<br />');    
                }
                */
                $db->close();
                break;
            }
            case "formNuovoMagazzino":{
                // crea il form HTML/Bootstrap per l'inserimento dei dati di un prodotto.
                echo('
                    <form action="magazzino.php">
                        <div class="mb-3">
                            <label for="inputDescrizione" class="form-label">nome Magazzino:</label>
                            <input type="text" name="nome" class="form-control" id="inputnome" aria-describedby="nomeHelp">
                            <label for="inputDescrizione" class="form-label">citta Magazzino:</label>
                            <input type="text" name="citta" class="form-control" id="inputcitta" aria-describedby="cittaHelp">
                            <label for="inputDescrizione" class="form-label">provincia citta Magazzino:</label>
                            <input type="text" name="provincia" class="form-control" id="inputprovincia" aria-describedby="provinciaHelp">
                        </div>
                        <input type="hidden" name="scelta" value="aggiungiMagazzino">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                ');
                break;
            }
            case "aggiungiMagazzino":{
                /* Case richiamato dal form di inserimento nuovo prodotto, quindi
                    nel vettore $_REQUEST[] avrò la chiave 'descrizione' con contenuto il testo immesso
                    nella casella del form
                */
                $desc = $_REQUEST['nome'];
                $citta = $_REQUEST['citta'];
                $provincia = $_REQUEST['provincia'];
                $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);

                $sql = "INSERT INTO magazzino(nome, citta, provincia) VALUES('$desc', '$citta', '$provincia')";


                if($db->query($sql)){
                    echo('<div class="alert alert-success">Nuovo magazzino aggiunto.</div>');
                }
                else{
                    echo('<div class="alert alert-warning">Problema in aggiunta nuovo magazzino.</div>');
                }
                $db->close();
                break;
            }
            case "deleteMagazzino":{
                $idP = $_REQUEST['idMagazzino'];
                $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);

                $sql = "DELETE FROM magazzino WHERE id='$idP'";
                if($db->query($sql))
                    echo('<div class="alert alert-success">Magazzino Cancellato Correttamente.</div>');
                else
                    echo('<div class="alert alert-warning">Magazzino inesistente o errore in cancellazione.</div>');
                
                $db->close();
                break;
            }
        }
    // << end fo your code >>

// richiamo la funzione per la creazione della sezione finale delle pagine.
writeFooter();
?>