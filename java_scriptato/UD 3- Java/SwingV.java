/*
Realizza un’applicazione Java con gui Java Swing in modo da presentare tre celle di testo (prima riga), due
bottoni (seconda riga) con etichetta “Divisori” e “Crescenti”, ed una label (terza riga). Quando viene premuto il
primo bottone nella label compaiono i divisori comuni ai primi due valori, attenzione se uno o entrambi i valori
inseriti sono uguali a 0 allora visualizza un messaggio “Errore! Numeri non validi.”
Quando viene premuto il secondo bottone viene verificato se i tre valori sono in ordine crescente: se vero allora
viene determinato e visualizzato nella label se è maggiore la differenza tra il primo e il secondo valore, oppure
tra il secondo e il terzo valore; se falso i tre valori vengono azzerati e nella label viene mostrato il messaggio
“Valori errati, reinserire!”.
*/

import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class SwingV extends JFrame{

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
    JLabel l03;


    JLabel l1;
    JLabel l2;
    JLabel l3;

    public SwingV(){

        panel.setLayout(new BoxLayout(panel, BoxLayout.PAGE_AXIS));

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

        panel.add(l1);
        panel.add(txt1);
        panel.add(l2);
        panel.add(txt2);
        panel.add(l3);
        panel.add(txt3);

        panel.add(btn1);
        panel.add(btn2);
        panel.add(l03);

        frame.add(panel);

        btnListener1 divisori = new btnListener1();
        btn1.addActionListener(divisori);

        btnListener2 crescenti = new btnListener2();
        btn2.addActionListener(crescenti);

        // definisce cosa succede quando primo la X in alto a dx della finestra UI 'frame'
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        // definisce il titolo della UI, viene scritto nella barra blu in alto.
        frame.setTitle("Calcolo somma di due valori");
        // Definisce le dimensioni in pixel della UI (dimensioni iniziali e ridimensionabile)
        frame.setSize(640,200);
        // Imposta la visibilità della finestra come 'true';
        frame.setVisible(true);
    }
    // Primo Esericizio
    /*
     * Quando viene premuto il primo bottone nella label compaiono i divisori comuni ai primi due valori, 
     * attenzione se uno o entrambi i valori inseriti sono uguali a 0 allora visualizza un messaggio 
     * “Errore! Numeri non validi.”
     */
    private class btnListener1 implements ActionListener{
        @Override
        public void actionPerformed(ActionEvent ev){
            int v1,v2, min;

            v1 = Integer.parseInt(txt1.getText());
            v2 = Integer.parseInt(txt2.getText());

            if(v1!= 0 && v2!=0){
                if(v2 > v1){
                    min = v1;
                }
                else{
                    min = v2;
                }

                int i;

                for(i=0; i<=min; i++){
                    if( v1%i == 0 &&  v2%i == 0 ){
                        l3.setText(i+ " ");
                    }
                }
            }
            else{
                l3.setText("Errore un numero non è valido");
            }
        }
    }
    // Secondo Esercizio
    /*
     * Quando viene premuto il secondo bottone viene verificato se i tre valori sono in ordine crescente: 
     * se vero allora viene determinato e visualizzato nella label se è maggiore la differenza tra il primo 
     * e il secondo valore, oppure tra il secondo e il terzo valore; 
     * se falso i tre valori vengono azzerati e nella label viene mostrato il messaggio
     * “Valori errati, reinserire!”.
     */
    private class btnListener2 implements ActionListener{
        @Override
        public void actionPerformed(ActionEvent ev){
            int v1,v2,v3;

            v1 = Integer.parseInt(txt1.getText());
            v2 = Integer.parseInt(txt2.getText());
            v3 = Integer.parseInt(txt3.getText());


            if(v1 > v2 &&  v2> v3 ){

                int diff1 = v2-v3;
                int diff2 = v1-v2;

                if(diff1 > diff2){
                    l3.setText(diff1 + " ");
                }
                else{
                    l3.setText(diff2 + " ");
                }
            }

            else{
                l3.setText("Valori Errati reinserire");
            }
        }
    }

    public static void main(String[] args){
        new SwingV();
    }
}