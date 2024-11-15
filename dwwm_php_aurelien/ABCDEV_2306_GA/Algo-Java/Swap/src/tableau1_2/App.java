/*
 PSEUDO-CODE
 
 Variable
 	tableauvoyelle est un tableau de caractères
 	(tableauvoyelle est un tableau de chaine de caractères si String)
 	i est un enter
 DEBUT
 	tableauvoyelle[] <-- a, e, i, o, u, y
 	Pour i = 0 à i < 6
 	Ecrire (tableauvoyelle[i] , " ")
 FIN 
 */




package tableau1_2;

import java.util.Scanner;

public class App {
	
	public static void main(String[] args) {
		
		Scanner sc = new Scanner(System.in);
		
        char tableauvoyelle[] = {'a','e','i','o','u','y'};
        
        // Ou String array[] = {"a","e","i","o","u","y"};
        
        for (int i = 0; i < tableauvoyelle.length; i++)
        {
            System.out.print(tableauvoyelle[i] + " ");
        }

        sc.close();
	}

}
