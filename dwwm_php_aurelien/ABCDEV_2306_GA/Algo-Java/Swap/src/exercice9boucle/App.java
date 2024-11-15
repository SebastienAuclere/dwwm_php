package exercice9boucle;

import java.util.Scanner;

public class App {
	
	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);
		
		int nbChevauxPartant;
		int nbChevauxJoues;
		
	do {
		System.out.println("Entrez le nombre de chevaux partant :");
		nbChevauxPartant = sc.nextInt();
		
		System.out.println("Entrez le nombre de chevaux joues (3, 4 ou 5) :");
		nbChevauxJoues = sc.nextInt();
		
		if(nbChevauxJoues == 3 || nbChevauxJoues == 4 || nbChevauxJoues == 5 ) {
			
			System.out.println("Les chances de gagner le tirage (" + nbChevauxJoues + " chevaux joues pour " + nbChevauxPartant +  " chevaux partant) sont \nDans l'ordre : " + factorielle(nbChevauxPartant - nbChevauxJoues)/factorielle(nbChevauxPartant)*100d + "%\nDans le desordre :" + (factorielle(nbChevauxJoues)*factorielle(nbChevauxPartant - nbChevauxJoues))/factorielle(nbChevauxPartant)*100d + "%");
			break;
		}
		else {
			System.out.println("Saisie invalide :");	
		}
	} while(nbChevauxPartant > nbChevauxJoues || nbChevauxJoues > 2 || nbChevauxJoues < 6 );
	
	sc.close();
	
	}
	
    public static double factorielle(int num){
        int result = 1; 

        for(int i=1; i<=num; i++){
          result = result*i;
        }

        return result;
      }
}


