package fibonacci;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
		int nombre;
		
		System.out.println("Combien de nombres de la suite de Fibonacci souhaitez-vous affiche ?");
		nombre = sc.nextInt();
	
		int tableau[]=new int[nombre];
		
		System.out.println("Les " + nombre + " premiers nombres de la suite de Fibonacci sont: ");
		
		System.out.print("0, " + "1, ");
		tableau[0] = 0;
		tableau[1] = 1;
		
		for(int i=2;i<tableau.length;i++)
		{
				tableau[i] = tableau[i-1] + tableau[i-2];
				System.out.print( tableau[i] + ", ");
				
		}
		
		
		sc.close();
	
	}	
		
	}	
