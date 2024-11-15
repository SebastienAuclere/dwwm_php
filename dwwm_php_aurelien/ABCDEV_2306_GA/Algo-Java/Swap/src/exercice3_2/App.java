package exercice3_2;

import java.util.Scanner;

public class App {
	
	public static void main(String[] args) {
		
		Scanner sc = new Scanner(System.in);
		
		int somme;
		double nbMagasin;
		
		System.out.println("Saisir la somme S :");
		somme = sc.nextInt();
		
		if(somme < 2) {
			System.out.println("La somme utilise est trop petite");
		}
		
		else {
		
			for(int i = 0; i <= somme; i++) {
			nbMagasin = (somme+2)*Math.pow(2, -i)-2;
			System.out.println((i+1) + " , " + nbMagasin);
			
			if(nbMagasin <= 0) {
				System.out.println("Barnabe peut visiter jusqu'a " + i + " magasin(s) avec une somme de " + somme + " euros.");
				break;
			}
		 
			}
		}
		sc.close();
	}
}