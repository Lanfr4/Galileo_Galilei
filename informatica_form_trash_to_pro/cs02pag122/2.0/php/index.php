<?php
session_start();
if(!isset($_SESSION['logged'])) $_SESSION['logged'] = false;
if(!isset($_REQUEST['scelta'])) $sc = null; else $sc = $_REQUEST['scelta'];

require('../include/libUser.php');

writeHeader();


    $db = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
    $sql = "SELECT * FROM prodotto, magazzino";
    $resultSet = $db->query($sql);
    //$db->close();

    // Tabella dei Prodotti
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
                            </tr>
                        ');  
                    }
                echo('</tbody>
                </table>');
    $db->close();
// richiamo la funzione per la creazione della sezione finale delle pagine.
writeFooter();
?>