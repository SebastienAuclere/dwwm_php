package fonction1;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		
	Scanner sc = new Scanner(System.in);
		
		double nombre1;
		double nombre2;
		
			System.out.println("Entrez le premier nombre : ");
			nombre1 = sc.nextDouble();
			
			System.out.println("Entrez le second nombre : ");
			nombre2 = sc.nextDouble();
		
			System.out.println("La moyenne de " + nombre1 + " et " + nombre2 + " est : " + moyenne(nombre1, nombre2));
			
			sc.close();
	}
	
	private static double moyenne(double a, double b) {
		double resultat = (a + b) / 2;
		return resultat;
		
		
		
	}
	

}
