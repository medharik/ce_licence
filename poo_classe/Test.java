package poo_classe;

public class Test {
public static void main(String[] args) {
//	//declarer un objet de type Produit
//	Produit hp ;
//	//instancier un objet de type Produit : hp
//	hp = new Produit();
//	
//	hp.libelle="hp dv 7";
//	hp.prix=9000;
//	hp.qtestock=10;
//	
//	hp.afficher();
//	hp.entreeStock(30);
//	hp.afficher();
//	double tht= hp.vendre(25);
//	System.out.println("tht est "+tht);
//	hp.afficher();
//	//un autre
//	Produit dell =new Produit();
//	dell.libelle=" dell satelite ";
//	dell.afficher();
	//
	Produit sony =new Produit();
	sony.afficher();
	sony.setPrix(1000);
	try {
		sony.setQtestock(10);
		sony.afficher();
		sony.setLibelle("sony vaio");
	} catch (Exception e) {
		
	System.out.println(e.getMessage());
	}
	System.out.println("le prix  de  "+sony.getLibelle()+" est "+sony.getPrix());
	
	Produit mac=new Produit("Mac pro", 10000 ,10);
	mac.afficher();
	Produit  sony2=new Produit(sony);
sony2.afficher();
ProduitAlimentaire lait=new ProduitAlimentaire();
lait.setPrix(10);
try {
	lait.setQtestock(100);
} catch (Exception e) {
	// TODO Auto-generated catch block
	e.printStackTrace();
}
lait.setLibelle("Lait uht go");
lait.afficher();
ProduitEletro pe=new ProduitEletro("oppo o90", 900, 10, "SMART PHONE ... ") ;
pe.afficher();
}
}
