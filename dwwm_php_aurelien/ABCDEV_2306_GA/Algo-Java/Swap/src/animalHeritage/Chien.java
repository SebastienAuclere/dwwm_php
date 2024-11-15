package animalHeritage;

public class Chien extends Animal {
	
	private String nomFamille;
	
	public Chien() {
		
		super();
		nomFamille = "inconnu";
	}
	
	public Chien(String _nomEspece, String _bruitCri, String _deplacement, String _nourriture, String _nomFamille) {
		
		super(_nomEspece, _bruitCri, _deplacement, _nourriture);
		nomFamille = _nomFamille;
	}

	public String getNomFamille() {
		return this.nomFamille;
	}
	
	public void setNomFamille(String _nomFamille) {
		nomFamille = _nomFamille;
	}
	
	public void afficherChien() {
		super.afficherAnimal();
		System.out.println(this.nomFamille + " est un animal de cette catégorie");
	}
	
}
