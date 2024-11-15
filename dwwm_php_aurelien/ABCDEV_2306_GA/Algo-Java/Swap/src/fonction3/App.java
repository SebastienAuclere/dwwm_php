package fonction3;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		
	Scanner sc = new Scanner(System.in);
	
	int nombre1;
	
	System.out.println("Entrez l'annee : ");
	nombre1 = sc.nextInt();
	
	System.out.println(bissextile(nombre1));
	
	sc.close();
	
	}
	
	private static String bissextile(int a) {
		String resultat = "";
		
		if(((a % 4 == 0) && (a % 100 != 0)) || (a % 400 == 0)) {
			System.out.println("L'annee " + a + " est bissextile");
		}
		
		else {
			System.out.println("L'annee " + a + " n'est pas bissextile");
		}
		
		return resultat;
	}
}
