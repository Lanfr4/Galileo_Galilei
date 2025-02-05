<?php
session_start();
/* Questa pagina sarà adibita al FRONTEND del progetto
 * ovvero una pagina dedicata alla visualizzazione di un utente non loggato
*/
if(!isset($_SESSION['logged'])) $_SESSION['logged'] = false;
if(isset($_REQUEST['scelta'])) $sc = $_REQUEST['scelta']; else $sc = null;

// includo la libreria con funzioni necessarie all'interfaccia.
require('../include/libUser.php');
// richiamo la funzione per la creazione della sezione iniziale delle pagine
writeHeader();
    writeMenu();

    // << your code start here >>
        switch($sc){
            case "listaProdotto":{
    
                $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
                $sql = "SELECT * FROM prodotto";
                $resultSet = $db->query($sql);

                echo('<table class="table table-striped table-hover ">
                    <caption>Lista dei prodotti disponibili</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Descrizione</th>
                        </tr>
                    </thead>
                    <tbody>                
                ');
                    while($record = $resultSet->fetch_assoc()){
                        echo('<tr>
                                <th scope="row">'.$record['id'].'</th>
                                <td>'.$record['descrizione'].'</td>
                                <td><a href="prodottoUser.php?scelta=deleteProdotto&idProdotto='.$record['id'].'">
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
            case "listaMagazzino":{
                $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
                $sql = "SELECT * FROM magazzino";
                $resultSet = $db->query($sql);

                echo('<table class="table table-striped table-hover ">
                    <caption>Lista dei prodotti disponibili</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Città</th>
                            <th scope="col">Provincia</th>
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
                                <td><a href="magazzinoUser.php?scelta=deleteMagazzino&idMagazzino='.$record['id'].'">
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
        }
    // << end fo your code >>
// richiamo la funzione per la creazione della sezione finale delle pagine.
writeFooter();
?>