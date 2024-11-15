package jalonObjetDomino;

public class TestDomino {
	public static void main(String[] args) {
		Domino domino = new Domino(96,44,28,12); // Choisir un nombre aléatoire
		
		int test1 = domino.affichePoints1();
		int test2 = domino.affichePoints2();
		int test3 = domino.affichePoints3();
		int test4 = domino.affichePoints4();
		int test5 = domino.valeur1();
		int test6 = domino.valeur2();
		boolean test7 = domino.coteACote();
	}
}
