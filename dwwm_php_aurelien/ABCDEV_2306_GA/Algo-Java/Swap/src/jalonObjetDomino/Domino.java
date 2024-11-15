package jalonObjetDomino;

public class Domino {
	
	int face1;
	int face2;
	int face3;
	int face4;
	
	public Domino() {
		
		face1 = 0;
		face2 = 0;
		face3 = 0;
		face4 = 0;
		
	}
	
	public Domino(int _face1, int _face2, int _face3, int _face4) {
		
		face1 = 0 + (int)(Math.random() * ((_face1 - 0) + 1));
		face2 = 0 + (int)(Math.random() * ((_face2 - 0) + 1));
		face3 = 0 + (int)(Math.random() * ((_face3 - 0) + 1));
		face4 = 0 + (int)(Math.random() * ((_face4 - 0) + 1));
		
	}
	
	public int affichePoints1() {
		
		int affichePoints1 = this.face1;
		
		return affichePoints1;
	}
	
	public int affichePoints2() {
		
		int affichePoints2 = this.face2;
		
		return affichePoints2;
	}
	
	public int affichePoints3() {
		
		int affichePoints3 = this.face3;
		
		return affichePoints3;
	}
	
	public int affichePoints4() {
		
		int affichePoints4 = this.face4;
		
		return affichePoints4;
	}
	
	public int valeur1() {
		
		int valeur1 = this.face1 + this.face2;
		
		return valeur1;
	}
	
	public int valeur2() {
		
		int valeur2 = this.face3 + this.face4;
		
		return valeur2;
	}
	
	public boolean coteACote() {
		
		if(this.face1 == this.face3 || this.face1 == this.face4 || this.face2 == this.face3 || this.face2 == this.face4) {
			return true;
		}
		else {
			return false;
			}
		}
	}
