package compteObjet;

import java.util.Scanner;

public class Compte {
	Scanner sc = new Scanner(System.in);
	
	String nomBanque;
	double solde;
	
	public Compte() {
	
		System.out.println("Creation d'une banque par defaut");
		
		nomBanque = "inconnu";
		solde = 0; // parametres
		
	}
	
	public Compte(String _nomBanque, double _solde) {
	
		
		this.nomBanque = _nomBanque;
		this.solde = _solde;
	}
	
	public void deposer(double depot) {
		this.solde += depot;
	}
	
	public void retirer(double retrait) {
		this.solde -= retrait;
	}
	
	public void afficher() {
		System.out.print("Le nouveau solde est de : " + solde);
	}
		
}
