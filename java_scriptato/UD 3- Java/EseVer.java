/*
 * Realizzare un'applicazione Java con interfaccia grafica che permetta di inserire due valori numerici, tramite un bottone viene richiamata una funzione che esegue le seguenti operazioni: 
- in una label mostra tutti i divisori del primo numero
- in una seconda label mostra i divisori del secondo numero.
- in una terza label comunica se i due numeri sono amicali (la somma dei divisori del primo numero è uguale al secondo numero e viceversa)
 */
 public class EseVer{

    public static int divNum(int _num){

        int i;
        int cnt;

        for(i=0;i<=_num/2;i++){
            if(_num%i==0){
                System.out.print(i);
            }
        }

    System.out.println();

    }

    public static  void Amicali (int _num1,int _num2){

        int i=0,j=0,max=0;
        int s1=0,s2=0;

        for(i=0;i<_num1/2;i++){
            if(_num1%i==0){
                s1+=i;
            }
        }

        for(j=0;j<_num2/2;j++){
            if(_num2%i==0){
                s2+=i;
            }
        }

        if(s1 == s2){
            System.out.println("I due numneri sono Amicali");
        }
        else{
            System.out.println("I due numneri NON  sono Amicali");
        }

    }

    public static void main(String args[]) throws IOException{
        BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
        String strIn;
        int num1,div1;
        int num2,div2;


        System.out.print("Inserisci il primo numero: ");
        strIn = br.readLine();
        num1 = Integer.parseInt(strIn);


        System.out.print("Inserisci il secondo numero: ");
        strIn = br.readLine();
        num2 = Integer.parseInt(strIn);

        divNum(num1);

        divNum(num2);

        Amicali(num1,num2);

        }
}
