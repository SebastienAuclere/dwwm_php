package animalHeritage;

public class Abeille extends Animal {
	
	private String nomFamille;
	
	public Abeille() {
		
		super();
		nomFamille = "inconnu";
	}
	
	public Abeille(String _nomEspece, String _bruitCri, String _deplacement, String _nourriture, String _nomFamille) {
		
		super(_nomEspece, _bruitCri, _deplacement, _nourriture);
		nomFamille = _nomFamille;
	}

	public String getNomFamille() {
		return this.nomFamille;
	}
	
	public void setNomFamille(String _nomFamille) {
		nomFamille = _nomFamille;
	}
	
	public void afficherAbeille() {
		System.out.println(this.nomFamille + " est un animal de cette catégorie");
	}
	
	public void afficherTout() {
		super.afficherAnimal();
		afficherAbeille();
	}
}
