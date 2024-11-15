package additionScanner;

import java.util.Scanner; // Importation de la classe java.util.Scanner

public class AdditionScanner {

	public static void main(String[] args) {
		
		Scanner scan; // si utilisation scanner, importer le Scanner
		double n1 , n2 , sum; // déclarer les variables
		
		scan = new Scanner(System.in); // Création d'un nouveau scanner
		
		System.out.println("Saisir le premier nombre");
		n1 = scan.nextDouble(); // Saisie du nombre 1
		
		System.out.println("Saisir le deuxieme nombre");
		n2 = scan.nextDouble(); // Saisie du nombre 2
		
		sum = (n1 + n2)/2;
		
		System.out.println("La somme vaut " + sum);
		
		scan.close();
	}
}
