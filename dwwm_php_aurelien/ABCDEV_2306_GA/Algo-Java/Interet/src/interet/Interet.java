package interet;

import java.util.Scanner;

public class Interet {
	
	public static void main(String[] args) {
		
		Scanner scan;
		double S , i , Si , Sc;
		int N;
		
		scan = new Scanner(System.in);
		
		System.out.println("Saisir la somme S :");
		S = scan.nextDouble();
		
		System.out.println("Saisir l'interet i :");
		i = scan.nextDouble();
		
		System.out.println("Saisir le nombre d'années N :");
		N = scan.nextInt();
		
		Si = S*(1+N*i/100);
		Sc = S*Math.pow(1+i/100, 2);
		
		System.out.println("L'interet simple vaut " + Si + " et l'interet compose vaut " + Sc);
		
		scan.close();
	}
}
