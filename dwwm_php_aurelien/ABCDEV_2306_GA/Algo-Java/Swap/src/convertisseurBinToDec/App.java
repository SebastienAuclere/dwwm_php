package convertisseurBinToDec;

import java.util.Scanner;

public class App {

	public static void main(String[] args)
	
	{
		int nombre; 
		int digits = 0;
		int decimal = 0;
		
	
		Scanner sc = new Scanner(System.in);
		
		System.out.print("Entrez la longueur du binaire");
			
		nombre = sc.nextInt();
		
		System.out.println("Entrez le nombre en binaire a convertir en decimal (0 ou 1)");
	
		int[] tableau = new int[nombre];
		
		for(int i = 0; i < nombre; i++)
		{
			tableau[i] = sc.nextInt();
		}
	
		for(int i = 0; i < nombre; i++)
		{
			if(tableau[i] == 1) {
				
				tableau[i] = (int) Math.pow(Math.pow(2,i), tableau[i]);
				decimal += tableau[i];				
			}
		}
		
		System.out.println("Le nombre binaire " + tableau + " vaut en decimal " + decimal + "):");

		sc.close();
	}
}