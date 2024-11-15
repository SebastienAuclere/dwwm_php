package tableau1_6;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		
		Scanner sc = new Scanner(System.in);
		
        int tableau1[] = {4,8,7,12};
        int tableau2[] = {3,6};
        int somme = 0;
		// TODO Auto-generated method stub
        
        for (int i = 0; i < tableau1.length; i++)
        {	
        	for (int j = 0; j < tableau2.length; j++) {
        	somme = tableau1[i]*tableau2[j] + somme;
        	
        	if((tableau2.length - 1) != j || (tableau1.length - 1) != i) {
        	
        		System.out.print(tableau1[i] + "*" + tableau2[j] + " + " );  // System.out.print(somme + " "); (Ici, affiche 8 valeurs)
            
        	}
        	
        	else {
        		System.out.print(tableau1[i] + "*" + tableau2[j]);
        	}
        	
        	}
        	// System.out.print(somme + " "); (Ici, affiche 4 valeurs)
        }
        
        System.out.println(" = " + somme);
        
        sc.close();
	}

}
