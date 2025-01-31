/*
 * Basandoti sull'esempio 01 per quanto riguarda la struttura del programma e le operazioni
 * di input/output realizza un programma che richiede due valori all'utente dopo di che
 * verifica e comunica se sono oppure no dei numeri primi e se sono numeri Amicali.
 * Ricordo che due numeri si dicono Amicali se la somma dei divisori di un numero (escluso se stesso)
 * è uguale all'altro numero.
 * Es: n1 e n2
 * somma divisori di n1 = n2 
 * E
 * somma divisori di n2 = n1
 */
import java.util.*;
import java.io.*;

public class Ese02 {
    public static void main(String args[]){
         int  sdn1 = 0;
         int  sdn2 = 0;
        //Amicali 

         BufferedReader br1 = new BufferedReader(new InputStreamReader(System.in));
         String str1;
         System.out.println("Inserisci il primo  numero: ");
         str1 = br1.readLine();

         int num1 = Integer.parseInt(str1);

         for(int i =1;i<num1 ;i++){
            if(num1%i == 0){
                sdn1 = sdn1+ i ;
            }
        }

         BufferedReader br2 = new BufferedReader(new InputStreamReader(System.in));
         String str2;
         System.out.println("Inserisci il secondo numero: ");
         str2 = br2.readLine();

         int num2 = Integer.parseInt(str2);
         
        for(int i =1;i<num2 ;i++){
            if(num2%i == 0){
                sdn2 = sdn2+ i ;
            }
        }
        
        if( sdn2 == num1 && sdn1 == num2){
            System.out.println("I due  numeri sono Amicali");
        }
        else{
            System.out.println("I due numeri non sono amciali");
        }

        // Numeri Primi
        
        int cnt1=0, cnt2=0;

        for(int i=0;i<num1;i++){
            if(num1%i == 0){
                cnt1++;
            }
        }

        for(int i=0;i<num2;i++){
            if(num2%i == 0){
                cnt2++;
            }
        }

        if(cnt1<=2 && cnt2<=2){
            System.out.println("I due numeri sono primi");
        }
    }
}