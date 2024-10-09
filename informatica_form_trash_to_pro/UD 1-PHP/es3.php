<?php
/**
 * 
 * Realizzare uno script che riceve tramite la REQUEST due chiavi chiamate
 * base e altezza. 
 * Lo script deve utilizzare i valori contenuti nelle chiavi per calcolare area e perimetro di un 
 * ipotetico rettangolo
 * Se una o tute e due le chiavi non sono valide comunicare il messaggio a video 'valori mancanti'
 *
 */

    if(isset($_REQUEST['base']))
        $b = $_REQUEST['base'];
    else
         $b = -1;
    

    if(isset($_REQUEST['altezza']))
        $a = $_REQUEST['altezza'];
    else
         $a = -1;
    
    
    if(($b != -1) && ($a!= -1)){
        $area = $b * $a;
        $perimetro = ($b + $a) *2;
        echo('Area pari a : '.$area.'<br> /');
        echo('Perimetro  pari a : '.$perimetro.'<br> ');
    }
    else{
        echo('Valori mancanti o  chive errata');
    }





?>