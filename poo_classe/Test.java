package poo_classe;

public class Test {
public static void main(String[] args) {
	//declarer un objet de type Produit
	Produit hp ;
	//instancier un objet de type Produit : hp
	hp = new Produit();
	
	hp.libelle="hp dv 7";
	hp.prix=9000;
	hp.qtestock=10;
	
	hp.afficher();
	hp.entreeStock(30);
	hp.afficher();
	double tht= hp.vendre(25);
	System.out.println("tht est "+tht);
	hp.afficher();
	//un autre
	Produit dell =new Produit();
	dell.libelle=" dell satelite ";
	dell.afficher();
}
}
