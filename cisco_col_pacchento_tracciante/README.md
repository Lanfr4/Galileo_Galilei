                DHCP

CONFIGURAZIONE DI UN ROUTER IN DHCP COL CLI (COMMAND LINE INTERFACE)

EN o ENABLE = ti permette di entrare nella zona privilegiata

CONFIGURE TERMINAL= ti permette di andare a configurare/modificare i campi del Router

INTERFACE FASTETHERNET (nome della porta)= ti permette di entrare nella sezione della porta scritta prima;

IP ADDRESS (gateway e maschera di rete) = ti fa inserire il gateway e la maschera che hai scritto prima;

IP DHCP  POOL (lan di destinazione )= ti fa diventare il router un distributore di indirizzi verso la lan che abbiamo scritto prima;

NETWORK = vado a scrivere l'indirizzo di rete e la maschera ;

IP DHCP EXCLUDED-ADDRESS= ti permette di escludere un range di indirizzi che scrive l’ utente(estremi compresi);

DEFAULT-ROUTER = bisogna inserire il default gateway;

(Bisogna ricordarsi di selezionare l’ opzione DHCP nella configurazione del computer)


CONFIGURAZIONE DI UN SERVER CON DHCP 


Bisogna configurare il server manualmente, perché non dispone di un sistema operativo incorporato

CONFIGURARE LE INFORMAZIONI DI BASE DEL SERVER(indirizzo e maschera di rete );

ANDIAMO NELLA SEZIONE SERVICES= e poi nella sottosezione dhcp;

DHCP = poi dobbiamo inserire il gateway, poi l’ indirizzo da cui deve partire il server e il numero massimo di utenti;

