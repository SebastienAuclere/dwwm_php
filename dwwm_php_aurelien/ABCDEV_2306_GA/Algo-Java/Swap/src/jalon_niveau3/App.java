package jalon_niveau3;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Scanner sc = new Scanner(System.in);

		int A;
		int i;
		String choix;

		System.out.println("Saisir le numero A entre 1 et 10");
		A = sc.nextInt();



		if(A >= 0 && A <= 10) {
			for(i=0; i<=10;i++) {

			System.out.println(i + " * " + A + " = " + A*i);
		}

			do {
			System.out.println("Souhaitez vous afficher une autre table ? oui/non");
			choix = sc.next();

			if(choix.equals("oui") || choix.equals("Oui") ) {

					System.out.println("Saisir le numero A");
					A = sc.nextInt();

					for(i=0; i<=10;i++) {

						System.out.println(i + " * " + A + " = " + A*i);
					}

				}

			}while(choix.equals("oui"));

		}
		else {
			System.out.println("le nombre tapé est trop grand ou trop petit");
		}

		}

	}

