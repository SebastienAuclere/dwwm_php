package fonction1_4;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {

	Scanner sc = new Scanner(System.in);
	
	int numTestJoueur1 = 0;
	int numTestOrdi1= 0;
	int numRandom1= 0;
	int enter1 = 0;
	int intervalleJoueur1 = 0;
	int intervalleOrdi1 = 0;
	int minJoueur1 = 0;
	int minOrdi1 = 0;
	int maxJoueur1 = 0;
	int maxOrdi1 = 0;
	int limite = 0;
	int essais = 0;
	String choix;
	boolean fermeture = false;
	
	do {
		System.out.println("Voulez-vous jouer ? Oui(O) ou Non(N)");
		choix = sc.nextLine();
		
		if(choix.equals("N") || choix.equals("n") || choix.equals("Non") || choix.equals("non") || choix.equals("NON")){
		System.out.println("Fin du jeu");
		break;
		}
		else if(choix.equals("O") || choix.equals("o") || choix.equals("Oui") || choix.equals("oui") || choix.equals("OUI")) {
			
		System.out.println(fourchetteVSavec(numTestJoueur1, numTestOrdi1, numRandom1, enter1, intervalleJoueur1, intervalleOrdi1, minJoueur1, minOrdi1, maxJoueur1, maxOrdi1, limite, essais));
		}
		else
		System.out.println("Saisie invalide");	
		
	} while(!fermeture);
		
		sc.close();
	
	}
	

	private static String fourchetteVSavec(int a, int b, int c, int d, int e, int f, int g, int h, int i, int j, int k, int l) {
	
	String fourchetteVSordi = "";
	
	Scanner sc = new Scanner(System.in);	
		
	int numTestJoueur = a;
	int numTestOrdi = b = 0 + (int)(Math.random() * ((100 - 0) + 1));
	int numRandom = c = 0 + (int)(Math.random() * ((100 - 0) + 1)); // Min + (int)(Math.random() * ((Max - Min) + 1)), inclus Max et Min
	int enter = d = 0;
	int intervalleJoueur = e;
	int intervalleOrdi = f;
	int minJoueur = g = 0;
	int minOrdi = h = 0;
	int maxJoueur = i = 100;
	int maxOrdi = j = 100;
	int limite = k;
	int essais = l;

	
		do {
		
		if(limite == 0)	 {
		System.out.println("Combien d'essais voulez-vous (taper 0 pour essai illimite):");
		essais = sc.nextInt();
		}
		System.out.println("Entrez une nombre entier compris entre 0 et 100 :");
		numTestJoueur = sc.nextInt();
		enter = enter + 1;
		limite = limite + 1;
		intervalleJoueur = numTestJoueur;
		intervalleOrdi = numTestOrdi;

			if(numTestJoueur > 100 || numTestJoueur < 0) {
				System.out.println("Invalide. \nLe nombre doit etre comprise entre 0 et 100");
				}

			else if(limite == essais) {
				System.out.println("Dommage, le nombre d'essais est depasse, le numero a deviner etait " + numRandom);
				break;
				}
			else if(numTestJoueur > numRandom && numTestOrdi > numRandom) {
				System.out.println("Choisir un numero plus petit (entre " + intervalleJoueur + " et " + minJoueur + ") \n Numero choisi par l'ordinateur (entre " + intervalleOrdi + " et "  + minOrdi + ") : " + numTestOrdi);
				maxJoueur = intervalleJoueur;
				maxOrdi = intervalleOrdi;
				numTestOrdi = maxOrdi - (int)(Math.random() * ((maxOrdi - minOrdi) + 1));
				}
			else if(numTestJoueur > numRandom && numTestOrdi < numRandom) {
				System.out.println("Choisir un numero plus petit (entre " + intervalleJoueur + " et " + minJoueur + ") \n Numero choisi par l'ordinateur (entre " + intervalleOrdi + " et "  + maxOrdi + ") : " + numTestOrdi);
				maxJoueur = intervalleJoueur;
				minOrdi = intervalleOrdi;
				numTestOrdi = minOrdi + (int)(Math.random() * ((maxOrdi - minOrdi) + 1));
				}

			else if(numTestJoueur < numRandom && numTestOrdi < numRandom) {
				System.out.println("Choisir un numero plus grand (entre " + maxJoueur + " et " + intervalleJoueur + ") \n Numero choisi par l'ordinateur (entre " + intervalleOrdi + " et "  + maxOrdi + ") : " + numTestOrdi);
				minJoueur = intervalleJoueur;
				minOrdi = intervalleOrdi;
				numTestOrdi = minOrdi + (int)(Math.random() * ((maxOrdi - minOrdi) + 1));
				}
			else if(numTestJoueur < numRandom && numTestOrdi > numRandom) {
				System.out.println("Choisir un numero plus grand (entre " + maxJoueur + " et " + intervalleJoueur + ") \n Numero choisi par l'ordinateur (entre " + intervalleOrdi + " et "  + minOrdi + ") : " + numTestOrdi);
				minJoueur = intervalleJoueur;
				maxOrdi = intervalleOrdi;
				numTestOrdi = maxOrdi - (int)(Math.random() * ((maxOrdi - minOrdi) + 1));
				}
			else if(numTestJoueur == numRandom) {
				System.out.println("Bravo, vous avez devine le bon numero en " + enter + " coups !");
				break;
				}
			else if(numTestOrdi == numRandom) {
				System.out.println("Dommage, vous avez perdu, le numero etait " + numRandom + " (l'ordinateur l'a devine en " + enter + " coups)");
				break;
			}
			else {
				System.out.println("Saisie invalide");
			}
			} 

		while(numTestJoueur <= 100 || numTestJoueur >= 0); {
		}

		return fourchetteVSordi;
	}

}