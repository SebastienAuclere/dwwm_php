package cercle;

import java.util.Scanner;

public class App {

	public static void main(String[] args) {
		/*VARIABLE
    rayon est un reel
    aire est un reel
    volume est un reel

Debut programme
    Ecrire "Saisir le rayon R"
    Lire ← rayon
    aire ← 4*π*rayon^2
    volume ← (4/3)*π*rayon^3
    Ecrire "l'aire de la sphere est", aire
    Ecrire "le volume de la sphere est", volume
Fin programme
		 */

		Scanner sc = new Scanner(System.in);
		
		double rayon;
		double aire;
		double volume;
		final double PI = Math.PI;
		
		System.out.println("Saisir le rayon R");
		rayon = sc.nextDouble();
		
		aire = 4*PI*Math.pow(rayon, 2);
		volume = (4/3d)*PI*Math.pow(rayon, 3);
		
		System.out.println("L'aire vaut " + aire + " et le volume vaut " + volume);
		
	}

}
