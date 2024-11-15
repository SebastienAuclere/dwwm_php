package exercice2_1;

import java.util.Scanner;

public class App {
	
	public static void main(String[] args) {
		
		Scanner scan;
		int age;
		
		scan = new Scanner(System.in);
		
		System.out.println("Saisir votre age");
		age = scan.nextInt();
		
		if(age > 17) {
			System.out.println("Vous etes majeur");
		}
		
		else if(age < 18 && age > -1) {
			System.out.println("Vous etes mineur");
		}
		
		else {
			System.out.println("Vous n'etes pas encore ne");
			
		}
		
		scan.close();
	}

}
