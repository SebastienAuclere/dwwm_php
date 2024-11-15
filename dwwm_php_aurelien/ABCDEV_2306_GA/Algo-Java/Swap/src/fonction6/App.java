package fonction6;

import java.util.Scanner;

//import java.util.Scanner;

public class App {


	public static void main(String[] args) {
		
		String mot = "";
		
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Entrez la chaine de caracteres a inverser");
		
		mot = sc.next();
		System.out.println(retourneChaine(mot));
		
		sc.close();
	}
	


	public static String retourneChaine(String chaineSaisie)
	{
		String chaineInverser="";
		for(int i = chaineSaisie.length()-1;i>=0;i--)
		{
		chaineInverser = chaineSaisie.charAt(chaineSaisie.length()-i-1) + chaineInverser;
		}
	
		return chaineInverser;
	}

}

//Scanner sc = new Scanner(System.in);

/*	int nombre;

System.out.println("Entrez le nombre de valeurs");
nombre = sc.nextInt();

String tableau[]=new String[nombre];
System.out.println("Entrez les valeurs dans le tableau");

for(int i=0;i<nombre;i++)
{
tableau[i]=sc.next();
}*/

/*System.out.println("Les valeurs dans le tableau incrementees de +1 sont:");
for(int i=0;i<nombre;i++)
{
	do
{
		tableau[i] = tableau[i];
		System.out.print(tableau[nombre - i - 1] + " ");
		break;
}
	while(i < tableau.length);
}*/