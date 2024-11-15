package tableau1_3;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
		int nombre;
		int comptagePositif = 0;
		int comptageNegatif = 0;
		
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
		
		}
		
		for(int i=0;i<nombre;i++)
		{
		
			if(tableau[i] < 0) {
				comptageNegatif++;
			}
			else {
				comptagePositif++;
				
			}
			
		
		}
		
		System.out.println("\n le nombre de valeurs positives est " + comptagePositif +  " et le nombre de valeurs negatives est " + comptageNegatif);
		
		sc.close();
	}

}
