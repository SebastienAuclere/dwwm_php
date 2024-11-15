package exercice2_2;

import java.util.Scanner;

public class App2 {
	
	public static void main(String[] args) {
	/*
	 Variable
	 	A est un entier
	 	B est un enter
	 Debut du programme
	 	Ecrire "Saisir le nombre A"
	 	Lire A
	 	Ecrire "Saisir le nombre B"
	 	Lire B
	 	Debut Si 
	 	Si A égal B
	 		Ecrire A , " = " , B
	 	Sinon Si A > B
	 		Ecrire B , " < " , A
	 	Sinon
	 		Ecrire A , " < " , B
	 	Fin Si
	 Fin du programme
	 */
		int A, B;
		
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Saisir le numero A");
		A = sc.nextInt();
		
		System.out.println("Saisir le numero B");
		B = sc.nextInt();
		
		if(A == B) {
			System.out.println(A + " = " + B);
		}
		
		else if(A > B) {
			System.out.println(B + " < " + A);
		}
		
		else {
			System.out.println(A + " < " + B);
			
		}
		
		sc.close();
	}
}
