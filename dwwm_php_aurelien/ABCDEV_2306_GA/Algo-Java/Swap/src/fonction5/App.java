package fonction5;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		
	Scanner sc = new Scanner(System.in);
	
	int jour;
	int mois;
	int annee;
	
	System.out.println("Entrez le jour en nombre : ");
	jour = sc.nextInt();
	
	System.out.println("Entrez le mois en nombre : ");
	mois = sc.nextInt();
	
	System.out.println("Entrez l'annee en nombre : ");
	annee = sc.nextInt();
	
	System.out.println(jourdelasemaine(jour, mois, annee));
	
	sc.close();
	
	}
	
	private static String jourdelasemaine(int a, int b, int c) {
		String resultat = "";
		
		// https://fr.wikibooks.org/wiki/Curiosit%C3%A9s_math%C3%A9matiques/Trouver_le_jour_de_la_semaine_avec_une_date_donn%C3%A9e#M%C3%A9thode_1
		
			if(b < 3 && (Math.floor(23*b/9d) + a + 4 + c + Math.floor((c-1)/4d) - Math.floor((c-1)/100d) + Math.floor((c-1)/400d))%7 == 0 || b >= 3 && (Math.floor(23*b/9d) + a + 2 + c + Math.floor(c/4d) - Math.floor(c/100d) + Math.floor(c/400d))%7 == 0) {
			System.out.println("le jour est un dimanche");
			}
			else if(b < 3 && (Math.floor(23*b/9d) + a + 4 + c + Math.floor((c-1)/4d) - Math.floor((c-1)/100d) + Math.floor((c-1)/400d))%7 == 1 || b >= 3 && (Math.floor(23*b/9d) + a + 2 + c + Math.floor(c/4d) - Math.floor(c/100d) + Math.floor(c/400d))%7 == 1) {
			System.out.println("le jour est un lundi");
			}
			else if(b < 3 && (Math.floor(23*b/9d) + a + 4 + c + Math.floor((c-1)/4d) - Math.floor((c-1)/100d) + Math.floor((c-1)/400d))%7 == 2 || b >= 3 && (Math.floor(23*b/9d) + a + 2 + c + Math.floor(c/4d) - Math.floor(c/100d) + Math.floor(c/400d))%7 == 2) {
			System.out.println("le jour est un mardi");
			}
			else if(b < 3 && (Math.floor(23*b/9d) + a + 4 + c + Math.floor((c-1)/4d) - Math.floor((c-1)/100d) + Math.floor((c-1)/400d))%7 == 3 || b >= 3 && (Math.floor(23*b/9d) + a + 2 + c + Math.floor(c/4d) - Math.floor(c/100d) + Math.floor(c/400d))%7 == 3) {
			System.out.println("le jour est un mercredi");
			}
			else if(b < 3 && (Math.floor(23*b/9d) + a + 4 + c + Math.floor((c-1)/4d) - Math.floor((c-1)/100d) + Math.floor((c-1)/400d))%7 == 4 || b >= 3 && (Math.floor(23*b/9d) + a + 2 + c + Math.floor(c/4d) - Math.floor(c/100d) + Math.floor(c/400d))%7 == 4) {
			System.out.println("le jour est un jeudi");
			}
			else if(b < 3 && (Math.floor(23*b/9d) + a + 4 + c + Math.floor((c-1)/4d) - Math.floor((c-1)/100d) + Math.floor((c-1)/400d))%7 == 5 || b >= 3 && (Math.floor(23*b/9d) + a + 2 + c + Math.floor(c/4d) - Math.floor(c/100d) + Math.floor(c/400d))%7 == 5) {
			System.out.println("le jour est un vendredi");
			}
			else {
			System.out.println("le jour est un samedi");
			}		
			return resultat;
	}
}

