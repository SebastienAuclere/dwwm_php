/*
 PSEUDO-CODE
 
 Variable
 	tableauzero est un tableau de nombre entier
 	i est un enter
 DEBUT
 	tableauzero[] <-- 0, 0, 0, 0, 0, 0, 0
 	Pour i = 0 à i < 7
 	Ecrire (tableauzero[i] , " ")
 FIN 
 */


package tableau1_1;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
	        int tableauzero[] = {0,0,0,0,0,0,0};
	        
	        for (int i = 0; i < tableauzero.length; i++)
	        {
	            System.out.print(tableauzero[i] +" ");
	        }
	   
	
		sc.close();
	}

}
