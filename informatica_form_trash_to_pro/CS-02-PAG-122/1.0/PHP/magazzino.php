<?php
    
if(isset($_REQUEST['scelta'])) $sc = $_REQUEST['scelta']; else $sc = null;

require('../include/lib.php');

writeHeader();
writeMenu();

    switch($sc){
        case "listaMagazzino":{
            $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
            $sql = "SELECT * FROM magazzino";
            $resultSet = $db->query($sql);

            echo('<table class="table table-striped table-hover ">
                <caption>Lista dei magazzino</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Citta</th>
                        <th scope="col">Provincia</th>
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

            $db->close();
            break;
        }
        case "formNuovoMagazzino":{
            // crea il form HTML/Bootstrap per l'inserimento dei dati di un prodotto.
            echo('
                <form action="magazzino.php">
                    <div class="mb-3">
                        <label for="inputNome" class="form-label">Nome Magazzino:</label>
                        <input type="text" name="nome" class="form-control" id="inputNome" aria-describedby="nomeHelp">
                        <div id="nomeHelp" class="form-text">Inserisci il nome del magazzino</div>
                        <label for="inputCitta" class="form-label">Citta Magazzino:</label>
                        <input type="text" name="citta" class="form-control" id="inputCitta" aria-describedby="cittaHelp">
                        <div id="cittaHelp" class="form-text">Inserisci la citta del magazzino</div>
                        <label for="inputProvincia" class="form-label">Provincia Magazzino:</label>
                        <input type="text" name="provincia" class="form-control" id="inputProvincia" aria-describedby="provinciaHelp">
                        <div id="provinciaHelp" class="form-text">Inserisci la provincia del magazzino</div>
                    </div>
                    <input type="hidden" name="scelta" value="aggiungiMagazzino">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            ');
            break;
        }
        case "aggiungiMagazzino" : {

            $nome = $_REQUEST['nome'];
            $citta = $_REQUEST['citta'];
            $provincia = $_REQUEST['provincia'];
                $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);

                $sql = "INSERT INTO magazzino(nome,citta,provincia) VALUES('$nome','$citta','$provincia')";
                if($db->query($sql)){
                    echo('<div class="alert alert-success">Nuovo magazzino aggiunto.</div>');
                }
                else{
                    echo('<div class="alert alert-warning">Problema in aggiunta del nuovo magazzino.</div>');
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

writeFooter();


?>