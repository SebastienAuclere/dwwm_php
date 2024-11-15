package compteObjet;

public class TestCompte {
	public static void main(String[] args) {
		
		Compte compte = new Compte("Caisse d'Epargne", 1000);
		
		compte.deposer(500); // ne pas mettre de types de donnees quand renvoie void
		compte.retirer(200);
		compte.afficher();
	}
}
