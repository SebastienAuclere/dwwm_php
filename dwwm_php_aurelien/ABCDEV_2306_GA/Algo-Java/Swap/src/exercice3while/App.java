package exercice3while;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
		int nombre;
		int i = 0;
		
		System.out.println("Entrez un nombre");
		nombre = sc.nextInt();
		
		while(i < 10) {
			nombre += 1;
			System.out.println(nombre);
			i++;
		}
		sc.close();
	}

}
