package tableau1_8;

import java.util.Scanner;

public class App {

	public static void main(String[] args)
	{
		int nombre; 
		int max = 0;
		int position = 0;
	
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
			if(max < tableau[i])
	
			{
			max = tableau[i];
			position = i;
			}
		}
		System.out.println("La valeur la plus grande est " + max + " en position " + (position + 1));
		
		sc.close();
		}
		
	}