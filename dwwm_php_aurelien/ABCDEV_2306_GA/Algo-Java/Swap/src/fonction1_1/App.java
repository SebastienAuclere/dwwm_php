package fonction1_1;

import java.util.Scanner;

public class App {
	
	public static void main(String[] args)
	{

		/*
		 FONCTION
		 	entier ordre(entier a, entier b, entier c) 
		 	resultatOrdre est un entier
		 	resultatOrdre <-- a+b+c
		 	retourne resultatOrdre
		 fin fonction
		 FONCTION
		 	reel CB(reel a, reel b, reel c) 
		 	resultatCB est un reel
		 	resultatCB <-- a/(a + b + c)*100
		 	retourne resultatCB
		 fin fonction
		 FONCTION
		 	reel cheque(reel a, reel b, reel c) 
		 	resultatCheque est un reel
		 	resultatCheque <-- b/(a + b + c)*100
		 	retourne resultatCheque
		 fin fonction
		 FONCTION
		 	reel virement(reel a, reel b, reel c) 
		 	resultatVirement est un reel
		 	resultatVirement <-- c/(a + b + c)*100
		 	retourne resultatVirement
		 fin fonction
		 Variables
		 nbCB, nbCheque, nbVirement sont des reels
		 Debut du programme
		 Ecrire "Entrez le nombre de paiement par carte bleue : "
		 Lire nbCB
		 Ecrire "Entrez le nombre de cheque emis : "
		 Lire nbCheque
		 Ecrire "Entrez le nombre de virement automatique : ")
		 Lire nbVirement
		 Ecrire "Nombre de paiements par Carte Bleue est : " nbCB
		 Ecrire "Nombre de cheques emis : " nbCheque
		 Ecrire "Nombre de virements automatiques : " + nbVirement
		 Ecrire "Vous avez emis " ordre(nbCB, nbCheque, nbVirement) " ordres de debit dont :"
		 Ecrire CB(nbCB, nbCheque, nbVirement) + " % par Carte Bleue"
		 Ecrire cheque(nbCB, nbCheque, nbVirement) + " % par cheque"
		 Ecrire virement(nbCB, nbCheque, nbVirement) + " % virement"
		 Fin de programme
		 
		 */
		
	Scanner sc = new Scanner(System.in);
	
		int nbCB;
		int nbCheque;
		int nbVirement;
		
		System.out.println("Entrez le nombre de paiement par carte bleue : ");
		nbCB = sc.nextInt();
		
		System.out.println("Entrez le nombre de cheque emis : ");
		nbCheque = sc.nextInt();
		
		System.out.println("Entrez le nombre de virement automatique : ");
		nbVirement = sc.nextInt();
		
		System.out.println("Nombre de paiements par Carte Bleue est : " + nbCB );
		System.out.println("Nombre de cheques emis : " + nbCheque);
		System.out.println("Nombre de virements automatiques : " + nbVirement);
		System.out.println("Vous avez emis " + ordre(nbCB, nbCheque, nbVirement) + " ordres de debit dont :");
		System.out.println(CB(nbCB, nbCheque, nbVirement) + " % par Carte Bleue");
		System.out.println(cheque(nbCB, nbCheque, nbVirement) + " % par cheque");
		System.out.println(virement(nbCB, nbCheque, nbVirement) + " % par virement");
		
	sc.close();
	
	}
	
	private static int ordre(int a, int b, int c) {
		int resultatOrdre = a + b + c;
		return resultatOrdre;
	
	}
		
	private static double CB(double a, double b, double c) {
		double resultatCB = a/(a + b + c)*100;
		return resultatCB;
		
	}
	
	private static double cheque(double a, double b, double c) {
		double resultatCheque = b/(a + b + c)*100;
		return resultatCheque;
		
	}
	
	private static double virement(double a, double b, double c) {
		double resultatVirement = c/(a + b + c)*100;
		return resultatVirement;
		
	}
	
}
