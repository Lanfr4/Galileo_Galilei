<?php
    //commento mono riga

    /*
    
    commento multi
    riga
    
    */ 
    echo('Hello world <br> /');// stampa a video
    // il <br> serve per andare a capo

// dichiarazione di una variabile.
$var;    // dichiaro una variabile vuota.(puo essere di qualsiasi tipo )

$var = 5; // assegno il valore intero 5 alla variabile var.

echo($var. '<br> /'); // opratore . serve per concatenare striche a variabili.

$var = $var/2;

echo($var. '<br> / ');


$var = "Hello World II";
echo($var. '<br> / ');

// si vuole ottnere un numero da assegnare alla variabile var.

// random qualsiasi numero 
$var = rand();
echo($var. '<br> / ');

// random ottiene un numero randomico tra 1 e 20
$var = rand(1,20);
echo($var. '<br> / ');

// esempio di condizione 

//gli opratori logici visti in c
//AND &&; OR ||;
//Uguale ==; Diverso !=
//< <= > >=
//sono uguali a quelli usati nel precedente linguaggio C/C++

if($var >=10){
    echo('Il valore di var e\' maggiore o uguale a 10 <br> /');
}
else{
    echo('Il valore di var è minore  di 10 <br> /');
}
// == anche il costrutto switch case è identico al C

// esempio con le iterative
// anche in PHP le iterative girano con condizione VERA

// vedere tutti i numeri da 1 a $var compreso(var ègenerato random qualche riga sopra)

for($i = 1; $i<= $var ; $i++){
    echo($i.'');
}
echo('<br> /');


// stesso ciclo ma con utilizzo del WHILE
$i =1;
while($i <= $var){
    echo($i.' ');
    $i++;
}

echo('<br> /');
echo('<br> /');

// dichiarazione e utilizzo dei vettori
$vet = array();

for($i=0; $i<=10; $i++){
    $vet [$i] = rand(1,20);

}

echo('<br> /');

$vet = NULL;
$vet = array();

for($i=0; $i<=10; $i++){
    echo($vet[$i]. '  ');
    
}

for($i=0; $i<=10; $i++){  // init con metodo 2 
   array_push($vet, rand(1,20));
    
}
echo('<br> /');

echo('Numero di elemnti : '.count($vet));

//VETTORI ASSOCIATIVI
/*

v[0] = 1;                v[primo] = 1;
v[1] = 5;        ma      v[secondo] = 2;
v[2] = 2;                v[terzo] = 3;

primo, secondo e terzo sono CHIAVI devono essere univoce nel mio vettore
(nn voglio delle copie)

a noi interessa $_REQUEST[][];

che viene creato quando usiamo htttp://localhost/p1.php?chiave=valore&chiave=valore 
*/
?>