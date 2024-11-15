package exercice2_3;

import java.util.Scanner;

public class App3 {
	
	public static void main(String[] args) {
		
		Scanner scan;
		double A, B, C;
		
		scan = new Scanner(System.in);
		
		System.out.println("Saisir le numero A");
		A = scan.nextDouble();
		
		System.out.println("Saisir le numero B");
		B = scan.nextDouble();
		
		System.out.println("Saisir le numero B");
		C = scan.nextDouble();
		
		if(A < B && B < C) {
			System.out.println(A + " < " + B + " < " + C);
		}
		
		else if(A < C && C < B) {
			System.out.println(A + " < " + C + " < " + B);
		}
		
		else if(B < A && A < C) {
			System.out.println(B + " < " + A + " < " + C);
		}
		
		else if(B < C && C < A) {
			System.out.println(B + " < " + C + " < " + A);
		}
		
		else if(C < A && A < B) {
			System.out.println(C + " < " + A + " < " + B);
		}
		
		else if(C < B && B < A) {
			System.out.println(C + " < " + B + " < " + A);
		}
		
		else {
			System.out.println("Au moins deux nombres sont identiques");
			
		}
		
		scan.close();
	}

}
