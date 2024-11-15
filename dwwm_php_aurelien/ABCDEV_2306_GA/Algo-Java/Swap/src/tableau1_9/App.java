package tableau1_9;

import java.util.Scanner;

public class App {

	public static void main(String[] args)
	{
		int nombre; 
		double somme = 0;
		double moyenne = 0;
	
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Entrez le nombre de valeurs");
			
		nombre = sc.nextInt();
	
		int tableau[] = new int[nombre];
	
		System.out.println("Entrez les valeurs dans le tableau");
	
		for(int i = 0; i < nombre; i++)
		{
			tableau[i] = sc.nextInt();
		}
	
		for(int i = 0; i < nombre; i++)
		{
			somme = somme + tableau[i];
			moyenne = (double) (somme/nombre);
		}
			System.out.println("Les notes au dessus de la moyenne sont (moyenne = " + moyenne + "):");
			
		for(int i = 0; i < nombre; i++)
		{
			if(moyenne < tableau[i])
				
			{
				System.out.print(tableau[i] + ", ");
			}
		}	
		
		sc.close();
	}
	
}