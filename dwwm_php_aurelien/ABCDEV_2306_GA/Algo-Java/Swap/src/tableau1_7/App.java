package tableau1_7;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
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
		
		System.out.println("Les valeurs dans le tableau incrementees de +1 sont:");
		for(int i=0;i<nombre;i++)
		{
			do
		{
				tableau[i] = tableau[i] + 1;
				System.out.print(tableau[i] + " ");
				break;
		}
			while(i < tableau.length);
		}
		
		sc.close();
	}
	

}