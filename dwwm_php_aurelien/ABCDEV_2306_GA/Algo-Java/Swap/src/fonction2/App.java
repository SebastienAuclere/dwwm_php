package fonction2;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		
	Scanner sc = new Scanner(System.in);
		
		double nombre1;
		double nombre2;
		double nombre3;
		
		System.out.println("Entrez la premiere longueur a : ");
		nombre1 = sc.nextDouble();
		
		System.out.println("Entrez la seconde longueur b : ");
		nombre2 = sc.nextDouble();
		
		System.out.println("Entrez la troisieme longueur c : ");
		nombre3 = sc.nextDouble();
		
		if(nombre1 + nombre2 < nombre3 || nombre2 + nombre3 < nombre1 || nombre3 + nombre1 < nombre2) {
			System.out.println("Ce triangle ne peut pas exister");
		}
		else {
			System.out.println("Le perimetre du triangle vaut " + perimetre(nombre1, nombre2, nombre3) + " et l'aire vaut " + aire(nombre1, nombre2, nombre3));
		}
		
		sc.close();
		
	}
	
	private static double perimetre(double a, double b, double c) {
		double resultat = a + b + c;
		return resultat;
		
	}
		
	private static double aire(double a, double b, double c) {
		double resultat = Math.sqrt((a + b + c)/2*((a + b + c)/2 - a)*((a + b + c)/2 - b)*((a + b + c)/2 - c));
		return resultat;
		
	}
}