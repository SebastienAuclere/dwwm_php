package exercice3_1;

import java.util.Scanner;

public class App {
	
	public static void main(String[] args) {
		
	Scanner sc = new Scanner(System.in);
	
	int numTest;
	int numRandomJoueur = 0 + (int)(Math.random() * ((100 - 0) + 1)); // Min + (int)(Math.random() * ((Max - Min) + 1)), inclus Max et Min
	int enter = 0;
	int intervalle;
	int min = 0;
	int max = 100;
	
		do {
		System.out.println("Entrez une nombre entier compris entre 0 et 100 :");
		numTest = sc.nextInt();
		enter = enter + 1;
		intervalle = numTest;
		
		
			if(numTest > 100 || numTest < 0) {
				System.out.println("Invalide. \nLe nombre doit etre comprise entre 0 et 100");
				}
		
			else if(numTest == numRandomJoueur) {
				System.out.println("Bravo, vous avez devine le bon numero en " + enter + " coups !");
				break;
				}
				
			else if(numTest > numRandomJoueur) {
				System.out.println("Choisir un numero plus petit (entre " + intervalle + " et " + min + ")");
				max = intervalle;
				}
			
			else {
				System.out.println("Choisir un numero plus grand (entre " + max + " et " + intervalle + ")");
				min = intervalle;
				}
			} 
		
		while(numTest <= 100 || numTest >= 0); {

		}

	sc.close();
	
	}
	
}

	