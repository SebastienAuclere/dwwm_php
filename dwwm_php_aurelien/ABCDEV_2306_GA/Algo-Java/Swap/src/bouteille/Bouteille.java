package bouteille;

import java.util.Scanner;

public class Bouteille {
	
	Scanner sc = new Scanner(System.in);
	
	private double capaciteEnL;
	private double contenanceEnL;
	private boolean estOuverte;
	private String nomMarque;
	
	public Bouteille(){
		System.out.println("Creation d'une bouteille par defaut");
		capaciteEnL = 1;
		contenanceEnL = 0;
		estOuverte = true;
		nomMarque = "inconnu";
	}
	
	public Bouteille(double _capaciteEnL, double _contenanceEnL, boolean _estOuverte, String _nomMarque) {
		
		System.out.println("Creation d'une bouteille avec parametres");
		
		this.capaciteEnL = _capaciteEnL;
		this.contenanceEnL = _contenanceEnL;
		this.estOuverte = _estOuverte;
		this.nomMarque = _nomMarque;
	
	}
	
	public boolean ouvrir() {
		if(!this.estOuverte) {
			this.estOuverte = true;
			return true;
		}
		else {
			return false;
		}
	}
	
	public boolean fermer() {
		if(this.estOuverte) {
			this.estOuverte = false;
			return true;
		}
		else {
			return false;
		}
	}
	public boolean remplirTout() {
		if(this.estOuverte && this.contenanceEnL < this.capaciteEnL) {
			return true;
		}
		else {
			return false;
		}
	}	
	public boolean viderTout() {
		if(this.estOuverte && this.contenanceEnL > 0) {
			return true;
		}
		else {
			return false;
		}
		
	}
	
	public boolean remplir() {
		double ajout;
		if(estOuverte && contenanceEnL != capaciteEnL)
		{
			System.out.println("Combien voulez vous rajouter de litre ?");
			ajout = sc.nextDouble();
			if(ajout + contenanceEnL <= capaciteEnL)
			{
				contenanceEnL = contenanceEnL + ajout;
			}
			else
			{
				System.out.println("ca fera trop.");
			}
		}else if (!estOuverte)
		{
			System.out.println("Ouvrez d'abord la bouteille");
		}
		else if (contenanceEnL == capaciteEnL)
		{
			System.out.println("La bouteille est pleine");
		}
		return true;
	}
	public boolean vider()
	{
		double reduction;
		if(estOuverte && contenanceEnL != 0)
		{
			System.out.println("Combien voulez vous rajouter de litre?");
			reduction = sc.nextDouble();
			if(reduction + contenanceEnL > 0)
			{
				contenanceEnL = contenanceEnL - reduction;
			}

		}else if (!estOuverte)
		{
			System.out.println("Ouvrez d'abord la bouteille");
		}
		else if (contenanceEnL == 0)
		{
			System.out.println("La bouteille est vide");
		}
		return true;
	}
}
