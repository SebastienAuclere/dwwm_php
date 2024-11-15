package exercice2_5;

import java.util.Scanner;

public class App5 {
	
	public static void main(String[] args) {
		
		Scanner sc = new Scanner(System.in);
		
		int A;
		int i;
		System.out.println("Entrez un nombre :");
		A = sc.nextInt();
		System.out.println("Liste des diviseurs de " + A);
		
		for(i=2; i<=A-1; i++) {
		
			if(A % i == 0){
			
				System.out.println(" "+i);
			
			}
			
		}
	
		sc.close();
	}

}
 