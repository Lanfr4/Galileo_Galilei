/*
 * Generare in modo random un numero compreso tra 1 e 50, 
 * il programma deve richiedere all'utente l'inserimento di un numero finche non indovina il numero random. 
 * Ad ogni inserimento indica se il numero inserito è inferiore o superiore rispetto al numero random; 
 * una volta indovinato comunica il numero di tentativi eseguiti.
 */
import java.util.*;
import java.io.*;
import java.util.Random.*;

public class Ese04 {
    public static void main(String args[]){
        
        int random = random.nextInt(50) + 1; 
        int volte = 0, cnt = 0;

        while(cnt == 0){

            BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
            String str1;
            System.out.println("Inserisci un numero: ");
            str1 = br.readLine();

            int num = Integer.parseInt(str1);

            if(num == random){
                cnt =1;
                volte = 1;
            }
            else if(num < random){
                System.out.println("Inserisci un numero piu grande");
                volte++;
            }
            else{
                System.out.println("Inserisci un numero piu grande");
                volte++;
            }
        }

        System.out.print("Bravo hai trovato il numero, ci hai messo: ");
        System.out.print(+volte+" ");

    }
}