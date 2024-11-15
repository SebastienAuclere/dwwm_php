package purge;

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
		
		System.out.println(purge(chaineSaisie,lettreSaisie));
		
		sc.close();

	}
	
	public static String purge(String chaine, String lettre)
	{
		String chainePurger = "";
		char lettreChar = lettre.charAt(0);
		
		for(int i = 0; i < chaine.length();i++)
		{
			if(chaine.charAt(i) != lettreChar)
			{
				chainePurger = chainePurger + chaine.charAt(i);
			}
		}
		return chainePurger;
	}

}
