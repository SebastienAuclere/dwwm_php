package algoprocedure5;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
		int ageSaisie;
		
		System.out.println("Saisir votre age");
		ageSaisie = sc.nextInt();
		
		choixAge(ageSaisie); // pas de println() quand procédure car ne renvoit rien
		
		sc.close();
	}
	
	private static void choixAge(int a)
	{
		if(a < 18 && a >= 0) {
			System.out.println("Vous etes mineur");
		}
		else if(a >= 18) {
			System.out.println("Vous etes majeur");
		}
		else {
			System.out.println("Vous etes pas encore ne");
		}
		}
	}
