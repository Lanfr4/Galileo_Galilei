import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class Swing01 extends JFrame{
    private JFrame frame;
    private JPanel panel;
    private JButton btn1;

    public Swing01(){
        frame = new JFrame();
        panel = new JPanel();
        btn1 = new JButton("Click Me");

        // aggiungo il bottone al pannello 
        panel.add(btn1);
        // aggiungo il pannelo al frame
        frame.add(panel);

        frame.setDefaultCloseOpreation(JFrame.EXIT_ON_CLOSE);

        frame.setTitle("My java GUI App");

        frame.setSize(640,480);

        frame.setVisible(true);
    }

    public static void main(String[] args){
        new Swing01();
    }

}
