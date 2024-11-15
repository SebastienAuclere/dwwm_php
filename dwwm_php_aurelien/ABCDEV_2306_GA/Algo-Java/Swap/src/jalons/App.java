package jalons;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		
		String estilEtudiant;
		boolean etudiantIlest;
		String jourMercredi;
		boolean onestMercredi;
		String jourJeudi;
		boolean onestJeudi;
		
		Scanner sc = new Scanner(System.in);
		
		System.out.println("Est-tu étudiant ? \nOui= O ou o Non=N ou n");
		estilEtudiant = sc.next();
		
		if(estilEtudiant.equals("O") || estilEtudiant.equals("o")) {
			etudiantIlest = true;
		}
		else {
			etudiantIlest = false;
		}
		
		System.out.println("Mercredi ? \nOui= O ou o Non=N ou n");
		jourMercredi = sc.next();
		
		if(jourMercredi.equals("O") || jourMercredi.equals("o")) {
			onestMercredi = true;
		}
		else {
			onestMercredi = false;
		}
		
		System.out.println("Jeudi ? \nOui= O ou o Non=N ou n");
		jourJeudi = sc.next();
		
		if(jourJeudi.equals("O") || jourJeudi.equals("o")) {
			onestJeudi = true;
		}
		else {
			onestJeudi = false;
		}
		
		if(onestJeudi == true && onestMercredi == true) {
			System.out.println("On ne peut pas etre Mercredi Et Jeudi en meme temps");
		}
		else if (etudiantIlest == true && onestJeudi == true){
			System.out.println("la réduction est de 20%");
			}
		else if(etudiantIlest == true && onestMercredi == true) 
		{
			System.out.println("la réduction est de 50%");
		}
		else
			System.out.println("Pas de réduction");
		
			sc.close();
		}
		
	}

