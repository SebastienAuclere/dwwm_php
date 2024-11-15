package exercice2_6;

import java.util.Scanner;

public class App6 {

	public static void main(String[] args) {

		Scanner sc = new Scanner(System.in);
		int A;
		int i;
		
		A = sc.nextInt();
		System.out.println("Entrez un nombre :");

		for(i=2; i<=A-1; i++) {
			
			if(A % i == 0) {
				System.out.println(A + " est un nombre premier");
			}
			
			else {
				System.out.println(A + " est un nombre compose");
			}
		}
			
		sc.close();
	}

}
