package jeuDeCartesObjet;

public class Personnage {
	
	private String nom;
	private int puissance;
	private int defense;
	private String pouvoir;
	private String famille;
	private String description;
	private String element;
	
	public Personnage() {
		
		// Constructeur par défaut
		
		System.out.println("Creation d'un objet personnage avec le constructeur par defaut");
		
		nom = "inconnu";
		puissance = 0;
		defense = 0;
		pouvoir = "inconnu";
		famille = "inconnu";
		description = "inconnu";
		element = "inconnu";
		
		
	}
		
	public Personnage(String _nom, int _puissance, int _defense, String _pouvoir) {
		
		// Constructeur avec paramètres
		
		nom = _nom;
		puissance = _puissance;
		defense = _defense;
		pouvoir = _pouvoir;
		
	}	
		
	public String getNom() {
		return this.nom;
	}
	
	public int getPuissance() {
		return this.puissance;
	}
	
	public int getDefense() {
		return this.defense;
	}
	
	public String getPouvoir() {
		return this.pouvoir;
	}
	
	public String getFamille() {
		return this.famille;
	}
	
	public String getDescription() {
		return this.description;
	}
	
	public String getElement() {
		return this.element;
	}
	
	public void setNom(String _nom) {
		nom = _nom;
	}
	
	public void setPuissance(int _puissance) {
		puissance = _puissance;
	}
	
	public void setDefense(int _defense) {
		defense = _defense;
	}
	
	public void setPouvoir(String _pouvoir) {
		pouvoir = _pouvoir;
	}
	
	public void setSpecificite() {
		
		if(this.puissance < 5)
		{
			this.famille = "Gardien" ;
			this.description = "Les mercenaires";
			this.element = "Eau";
		}
		else if(puissance == 5)
		{
			this.famille = "Sage";
			this.description = "Les gardes royaux";
			this.element = "Terre";
		}
		else if(puissance == 6)
		{
			this.famille = "Paladin";
			this.description = "Les magiciens";
			this.element = "Feu";
		}
		
		else if(puissance == 7)
		{
			this.famille = "Corsaire";
			this.description = "Les protecteurs de cites";
			this.element = "Air";
		}
		else if(puissance > 7)
		{
			this.famille = "Mage";
			this.description = "Les erudits";
			this.element = "Terre";
		}
	}
	
	public void afficherPersonnage() {
		System.out.println("Nom: " + this.nom + ", Puissance: " + this.puissance + ", Defense: " + this.defense +  ", Pouvoir: " + this.pouvoir + ", Famille: " + this.famille + ", Description: " + this.description + ", Element: " + this.element);
	}
}
