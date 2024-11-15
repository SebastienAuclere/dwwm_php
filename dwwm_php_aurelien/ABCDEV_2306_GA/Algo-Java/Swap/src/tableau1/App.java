package tableau1;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		
		Scanner sc = new Scanner(System.in);
		
		int[] tableau = new int[] {0, 1 ,2, 3};
		int numTest;
		boolean numTableau = false;
		
		System.out.println("Entrez un nombre");
		numTest = sc.nextInt();
		
		for(int i=0; i < tableau.length; i++) {
			
			if(tableau[i] == numTest) {
				numTableau = true;
				}
			else
				{
				numTableau = false;
				}
											  }
		if(numTableau == true) {
			System.out.println(numTest + " est dans le tableau");
			}
		else {
			System.out.println(numTest + " n'est pas dans le tableau");
			
			}
			sc.close();
		
	}
		
}

