<?php
session_start();
/** Questa pagina sarà adibita alla gestione della tabella PRODOTTO */
if(isset($_REQUEST['scelta'])) $sc = $_REQUEST['scelta']; else $sc = null;

// includo la libreria con funzioni necessarie all'interfaccia.
require('../include/libUser.php');
// richiamo la funzione per la creazione della sezione iniziale delle pagine
writeHeader();
    writeMenu();

    // << your code start here >>
        switch($sc){
            case "listaMagazzino":{
                $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
                $sql = "SELECT * FROM magazzino";
                $resultSet = $db->query($sql);

                echo('<table class="table table-striped table-hover ">
                    <caption>Lista dei Magazzini disponibili</caption>
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