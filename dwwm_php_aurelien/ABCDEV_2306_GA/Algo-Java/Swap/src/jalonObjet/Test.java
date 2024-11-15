package jalonObjet;

public class Test {
	
	public static void main(String[] args) {
		Article article1 = new Article("Nourriture","ChocolatNoir",2,5.5);
		Article article2 = new Article("Nourriture","ChocolatAuLait",2,19.6);
		
		article1.afficherArticle();
		article2.afficherArticle();

	}
}
