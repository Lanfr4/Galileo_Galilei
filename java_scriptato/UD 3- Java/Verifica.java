/*
Realizza un’applicazione Java con gui Java Swing in modo da presentare tre celle di testo (prima riga), due
bottoni (seconda riga) con etichetta “Divisori” e “Crescenti”, ed una label (terza riga). Quando viene premuto il
primo bottone nella label compaiono i divisori comuni ai primi due valori, attenzione se uno o entrambi i valori
inseriti sono uguali a 0 allora visualizza un messaggio “Errore! Numeri non validi.”
Quando viene premuto il secondo bottone viene verificato se i tre valori sono in ordine crescente: se vero allora
viene determinato e visualizzato nella label se è maggiore la differenza tra il primo e il secondo valore, oppure
tra il secondo e il terzo valore; se falso i tre valori vengono azzerati e nella label viene mostrato il messaggio
*/

import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class Verifica extends JFrame{

    JFrame frame;
    JPanel panel;
    JPanel tmPanel;

    //I due Bottoni 
    JButton btn1; // Divisori
    JButton btn2; // Crescenti

    // Le tre celle di Testo 
    JTextField txt1;
    JTextField txt2;
    JTextField txt3;

    // Terza Riga con la Label 
    JLabel label03;


    JLabel l1;
    JLabel l2;
    JLabel l3;

    public Verifica(){

        frame = new JFrame();
        frame.setTitle("Multi panel layout");
        
        panel = new JPanel();
        panel.setLayout(new BoxLayout(panel, BoxLayout.PAGE_AXIS));

        l1 = new JLabel("Primo valore:");
        l2 = new JLabel("Secondo valore:");
        l3 = new JLabel("Terzo Valore");

        txt1 = new JTextField (15);
        txt2 = new JTextField (15);
        txt3 = new JTextField (15);
        

        btn1 = new JButton("Divisori");
        btn2 = new JButton("Crescenti");

        panel.add(txt1);
        panel.add(l2);
        panel.add(txt2);
        panel.add(btn1);
        panel.add(l3);

        frame.add(panel);


    }

    public static void main(String[] args){
        new Verifica();
    }



}