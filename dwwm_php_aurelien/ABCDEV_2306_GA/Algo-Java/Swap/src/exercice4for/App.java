package exercice4for;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
		int nombre;
		int somme = 0;
		
		System.out.println("Entrez un nombre");
		nombre = sc.nextInt();
		
		for(int i = 0; i <= nombre; i++) {
			somme += i;
			
		}
		
		System.out.println("nombre = " + nombre + " et sommme = " + somme);
		
		sc.close();
	}

}
