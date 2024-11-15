package animalHeritage;

public class ChevalGirafe extends Herbivore{
	
	private String nomRace1;
	private String nomRace2;
	
	public ChevalGirafe() {
		
		super();
		nomRace1 = "inconnu";
		nomRace2 = "inconnu";
	}
	
	public ChevalGirafe(String _nomEspece, String _bruitCri, String _deplacement, String _nourriture, String _nomFamille, String _nomRace1, String _nomRace2) {
		
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
	
	public void afficherChevalGirafe() {
		System.out.println(this.nomRace1 + " est un animal qui mange de l'herbe et " + this.nomRace2 + " est un animal qui mange des feuilles");
	}
	
	public void afficherTout() {
		super.afficherHerbivore();
		afficherChevalGirafe();
	}

}
