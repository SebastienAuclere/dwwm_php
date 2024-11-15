package exercice3for;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner sc = new Scanner(System.in);
		
		int nombre;
		
		System.out.println("Entrez un nombre");
		nombre = sc.nextInt();
		
		for(int i = (nombre + 1); i < (nombre + 11); i++) {
			System.out.println(i);
		}
		sc.close();

	}

}
