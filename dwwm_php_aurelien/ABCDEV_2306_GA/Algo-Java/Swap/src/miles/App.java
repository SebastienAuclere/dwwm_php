package miles;

import java.util.Scanner;

public class App {
	
	public static void main(String[] args) {
		
	Scanner sc = new Scanner(System.in);
	
	double km;
	double mi;
	
		do {
		System.out.println("Entrez une distance en kilometres :");
		km = sc.nextDouble();
			if(km > 1000000 || km < 0.01) {
				System.out.println("Invalide. \nLa distance doit etre comprise entre 0.01 et 1000000 km.\n");
			}
		
		} 
		
		while(km > 1000000 || km < 0.01); {
		
		mi = km/1.609d;
		System.out.println("La distance vaut " + mi + " miles.");
		System.exit(0);
		
		}
		
		sc.close();
		
		}
	
	}

