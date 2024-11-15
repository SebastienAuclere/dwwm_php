package animalHeritage;

public class Labrador extends Chien {
	
	private String nomRace1;
	private String nomRace2;
	
	public Labrador() {
		
		super();
		nomRace1 = "inconnu";
		nomRace2 = "inconnu";
	}
	
	public Labrador(String _nomEspece, String _bruitCri, String _deplacement, String _nourriture, String _nomFamille, String _nomRace1, String _nomRace2) {
		
		super(_nomEspece, _bruitCri, _deplacement, _nourriture, _nomFamille);
		nomRace1 = _nomRace1;
		nomRace2 = _nomRace2;
	}
	
	public String getNomRace1() {
		return this.nomRace1;
	}
	
	public void setNomRace1(String _nomRace1) {
		nomRace1 = _nomRace1;
	}
	
	public String getNomRace2() {
		return this.nomRace2;
	}
	
	public void setNomRace2(String _nomRace2) {
		nomRace2 = _nomRace2;
	}
	
	public void afficherLabrador() {
		System.out.println(this.nomRace1 + " est un chien qui aide les aveugles et " + this.nomRace2 + " est un chien qui aime jouer");
	}
	
	public void afficherDeplacementLabrador() {
		
		if(Math.random() < 0.5) {
			System.out.println(this.nomRace1 + " ne se déplace pas");
		}
		
		else {
			System.out.println(this.nomRace1 + " se deplace");
		}
	}
	
	public void afficherTout() {
		super.afficherChien();
		afficherLabrador();
		afficherDeplacementLabrador();
	}

}
