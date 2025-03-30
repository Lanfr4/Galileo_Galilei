public class Ese04 {
    public static void main(String[] args){
        Robot r1 = new Robot();
        Robot r2 = new Robot();

        r1.setValues(5, 7);// puo settare valori 
        r2.setValues(3, 10);

        System.out.println("Somma valori r1("+r1.getValueA()+","+r1.getValueB()+"): "+r1.getSommaValues());
        // stampa a capo i vari valori, getValue() è una funzione serve per stampare i valori contenuti in r1 e r2 
        System.out.println("Somma valori r2: "+r2.getSommaValues());
    }
}
