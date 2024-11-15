package tableau1_5;

import java.util.Scanner;


public class App {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
	        int tableau1[] = {4,8,7,9,1,5,4,6};
	        int tableau2[] = {7,6,5,2,1,3,7,4};
	        
	        for (int i = 0; i < tableau1.length; i++)
	        {
	            System.out.println(tableau1[i] + tableau2[i] + " ");
	        }
	
		sc.close();
	}

}
