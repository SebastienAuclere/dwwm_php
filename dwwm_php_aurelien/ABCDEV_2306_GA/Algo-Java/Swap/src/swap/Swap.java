package swap;

import java.util.Scanner;

public class Swap {
	
	public static void main(String[] args) {
	
		Scanner scan;
		int A , B , C;
		
		scan = new Scanner(System.in);
		
		System.out.println("Saisir le nombre entier A :");
		A = scan.nextInt();
		
		System.out.println("Saisir le nombre entier B :");
		B = scan.nextInt();
		
		C = A;
		A = B;
		B = C;
		
		System.out.println("Le resultat apres permutation est " + A + " , " + B);
		
		scan.close();
	
	}

}
