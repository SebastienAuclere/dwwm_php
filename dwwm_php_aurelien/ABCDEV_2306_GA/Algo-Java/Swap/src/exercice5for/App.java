package exercice5for;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner sc = new Scanner(System.in);
		
		int nombre;
		int produit = 1;
		
		System.out.println("Entrez un nombre");
		nombre = sc.nextInt();
		
		for(int i = 1; i <= nombre; i++) {
			produit *= i;
			
		}
		
		System.out.println("nombre = " + nombre + " et produit = " + produit);
		
		sc.close();
		
	}

}
