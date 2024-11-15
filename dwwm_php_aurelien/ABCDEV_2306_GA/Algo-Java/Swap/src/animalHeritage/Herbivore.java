package animalHeritage;

public class Herbivore extends Animal {
	
	private String nomFamille;
	
	public Herbivore() {
		
		super();
		nomFamille = "inconnu";
	}
	
	public Herbivore(String _nomEspece, String _bruitCri, String _deplacement, String _nourriture, String _nomFamille) {
		
		super(_nomEspece, _bruitCri, _deplacement, _nourriture);
		nomFamille = _nomFamille;
	}

	public String getNomFamille() {
		return this.nomFamille;
	}
	
	public void setNomFamille(String _nomFamille) {
		nomFamille = _nomFamille;
	}
	
	public void afficherHerbivore() {
		super.afficherAnimal();
		System.out.println(this.nomFamille + " est un animal de cette catégorie");
	}

}
