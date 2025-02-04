/*
    Ese03:
    Realizzare un programma Java che richieda un numero in input finche non viene inserito un numero primo, 
    quando il numero primo viene inserito comunica a video quanti tentativi sono stati eseguiti.
 */
import java.util.*;
import java.io.*;

public class Ese03 {
    public static void main(String args[]){

        int volte = 0;
        int cnt = 0;
        int sdn = 0;

        while(cnt == 0){

            BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
            String str1;
            System.out.println("Inserisci un numero: ");
            str1 = br.readLine();

            int num = Integer.parseInt(str1);

            for(int i =1;i<num ;i++){
                if(num%i == 0){
                    sdn = sdn+ i ;
                }
            }

            num = 0;
            str1 = "NULL";

            if(sdn <= 2){
                volte +=1;
                cnt =1;
            }
            else{
                volte+=1;
            }
        }

        System.out.print("Hai inserito un numero primo,ci ha messo : ");
        System.out.print(+volte+" ");
    }
}