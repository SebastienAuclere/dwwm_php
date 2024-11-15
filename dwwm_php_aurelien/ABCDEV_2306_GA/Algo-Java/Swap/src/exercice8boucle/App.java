package exercice8boucle;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
		int somme = 0;
		int total = 0;
		int prix = 0;
		
		do {
			System.out.println("Entrez un nombre");
			somme = sc.nextInt();
			total = somme + total;
			System.out.println(total);
			
			if(somme == 0) {
				System.out.println("Entrez un prix");
				prix = sc.nextInt();
				System.out.println("Vous recevez " + Math.floor((total - prix)/10) + " billets de 10 euros et " + Math.floor((total - prix)%10/5) + " billet de 5 euros et " + (total - prix)%5 + " pieces de 1 euro");
			}
		} while (somme != 0);
		
		sc.close();
	}
}
