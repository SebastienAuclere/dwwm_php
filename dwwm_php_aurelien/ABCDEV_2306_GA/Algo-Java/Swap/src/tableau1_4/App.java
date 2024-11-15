package tableau1_4;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
		int nombre;
		int somme = 0;
		
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
			somme = somme + tableau[i];
			System.out.print(tableau[i]+" ");
		
		}
		
		System.out.println("\nla somme des valeurs du tableau vaut: " + somme);
		
		sc.close();
	}

}
