package fonction1_3;

import java.util.Scanner;

public class App {
	
	public static void main(String[] args) {
	
	Scanner sc = new Scanner(System.in);
	
	int nombre;
	int diviseur;
	
	System.out.println("Entrez un nombre enter a diviser :");
	nombre = sc.nextInt();

	System.out.println("Entrez le diviseur :");
	diviseur = sc.nextInt();
	
	System.out.println(modulo(nombre, diviseur));	
	
	sc.close();
	
	}
	
	private static String modulo(int a, int b) {
		
		String resultatModulo = "";
		
		if(a % b == 0) {
			System.out.println(b + " est un diviseur de " + a);
		}
		
		else {
			System.out.println(b + " est pas un diviseur de " + a);
		}
		
		return resultatModulo;
	
	}

}