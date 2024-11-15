package purgebis;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner sc = new Scanner(System.in);
		
		String chaineSaisie;
		String lettreSaisie;
		
		System.out.println("Saisr un mot ou une phrase");
		chaineSaisie = sc.nextLine();
		System.out.println("Saisr une lettre");
		lettreSaisie = sc.nextLine();
		
		System.out.println(purgeBis(chaineSaisie,lettreSaisie));
		
		sc.close();

	}
	
	public static String purge(String chaine, char lettre)
	{
		String chainePurger = "";
		
		for(int i = 0; i < chaine.length();i++)
		{
			if(chaine.charAt(i) != lettre)
			{
				chainePurger = chainePurger + chaine.charAt(i);
			}
		}
		return chainePurger;
	}
	
	public static String purgeBis(String chaine, String lettre)
	{
		char lettreChar;
		String chainePurgerBis = "";
		for(int i = 0; i < lettre.length();i++)
		{
			lettreChar = lettre.charAt(i);
			if(i == 0)
			{
				// on purge la chaine saisie
				chainePurgerBis = purge(chaine,lettreChar);
			}
			else if(i > 0)
			{
					chainePurgerBis = purge(chainePurgerBis,lettreChar);
				
			}
			
		}
		 
		return chainePurgerBis;
	}

}
