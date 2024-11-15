package jalonObjet;

public class Article {
	
	private String reference;
	private String designation;
	private double prixHT;
	private double tauxTVA;
	
	public String getReference() {
		return this.reference;
	}
	
	public String getDesignation() {
		return this.designation;
	}
	
	public double getPrixHT() {
		return this.prixHT;
	}
	
	public double getTauxTVA() {
		return this.tauxTVA;
	}
	
	public void setReference(String _reference) {
		this.reference = _reference;
	}
	
	public void setDesignation(String _designation) {
		this.designation = _designation;
	}
	
	
	public void setPrixHT(double _prixHT) {
		this.prixHT = _prixHT;
	}
	
	
	public void setTauxTVA(double _tauxTVA) {
		this.tauxTVA = _tauxTVA;
	}
	
	public Article() { // Constructeur par défaut
		reference = "";
		designation = "";
		prixHT = 0;
		tauxTVA = 0;
	}
	
	public Article(String _reference, String _designation, double _prixHT, double _tauxTVA) { // Constructeur avec paramètres
		reference = _reference;
		designation = _designation;
		prixHT = _prixHT;
		tauxTVA = _tauxTVA;
	}
		
	public double calculerPrixTTC() {
		
		double calculerPrixTTC = this.prixHT + this.prixHT*this.tauxTVA/100;
		return calculerPrixTTC;
	}
	
	public void afficherArticle() {
		System.out.println("Le prix de l'article : " + this.designation + " vaut " + calculerPrixTTC() + " Euros");
	}
}

