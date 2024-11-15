package animalHeritage;

public class Animal {
	
	protected String nomEspece;
	protected String bruitCri;
	protected String deplacement;
	protected String nourriture;
	
	public Animal() {
		
		// Constructeur par défaut
		
		System.out.println("Creation d'un objet animal avec le constructeur par defaut");
		nomEspece = "inconnu";
		bruitCri = "inconnu";
		deplacement = "inconnu";
		nourriture = "inconnu";
		
	}
	
	public Animal (String _nomEspece, String _bruitCri, String _deplacement, String _nourriture) {
		
		// Constructeur avec paramètres
		
		System.out.println("Creation d'un objet animal avec le constructeur avec parametres");
		nomEspece = _nomEspece;
		bruitCri = _bruitCri;
		deplacement = _deplacement;
		nourriture = _nourriture;
	}
	
	public String getNomEspece() {
		
		// Getter
		
		return this.nomEspece;
	}
	
	public String getBruitCri() {
		return this.bruitCri;
	}
	
	public String getDeplacement() {
		return this.deplacement;
	}
	
	public String getNourriture() {
		return this.nourriture;
	}
	
	public void setNomEspece(String _nomEspece) {
		
		// Setter
		
		nomEspece = _nomEspece;
	}
	
	public void setBruitCri(String _bruitCri) {
		bruitCri = _bruitCri;
	}
	
	public void setDeplacement(String _deplacement) {
		deplacement = _deplacement;
	}
	
	public void setNourriture(String _nourriture) {
		nourriture = _nourriture;
	}
	
	public void afficherAnimal() {
		System.out.println("\n" + "Le " + this.nomEspece + " est une espece qui " + this.bruitCri + ", qui se déplace en " + this.deplacement +  " et qui mange du " + this.nourriture);
	}
	
}
