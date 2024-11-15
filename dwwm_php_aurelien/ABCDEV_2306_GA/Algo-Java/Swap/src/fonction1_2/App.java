package fonction1_2;

import java.util.Arrays;
import java.util.Scanner;

public class App {
	
	public static void main(String[] args) {
	
		Scanner sc = new Scanner(System.in);
		
		int nombre;
		
		System.out.println("Entrez le nombre de valeurs");
		nombre = sc.nextInt();
	
		int tableau[]=new int[nombre];
		System.out.println("Entrez les valeurs dans le tableau");
		
		for(int i=0;i<nombre;i++)
		{
		tableau[i]=sc.nextInt();
		}
		
		System.out.println("Les valeurs dans le tableau sont:");
		for(int i=0;i<nombre;i++)
		{
			System.out.print(tableau[i]+" ");
		
			// Affiche les valeurs du tableau
			
		}
		
		int maximum = maxValeur(tableau);
		
        System.out.println("\n" + "La valeur la plus grande dans le tableau est : " + maximum);
		
	sc.close();
	
	}
	
	private static int maxValeur(int[]a) {
		
		int max;
		Arrays.sort(a);
		max = a[a.length - 1];
		return max;
	
	}
	
}