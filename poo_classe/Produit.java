package poo_classe;

public class Produit {
	//Principe numero 1 de la poo :
	// encapsultion :
	// role principal : proteger les donnees des objets 
	//comment : on les declarant private et on n'autorisant leurs acces qu'a travers 
	//des setters (mutateurs pour l'ecriture) et des gettes (accesseurs pour la lecture)
	//attributs <=> fields

//constructeurs : 
	// des  methodes permettantd'initialiser les attributs (lors de l'appel de new )
private 	String libelle;
private 	double prix;
private 	double qtestock;

//constructeur
public Produit() {

}

public Produit(String libelle,  double prix , double qteStock ) {
	this.libelle=libelle;
	this.prix=prix;
	this.qtestock=qteStock;
}
public Produit(Produit p){
this(p.libelle, p.prix, p.qtestock);

}

public Produit(String libelle, double prix) {
	
	this.libelle = libelle;
	this.prix = prix;
}

//ecriture le prix
public void setPrix(double prix) throws Exception   {
	if(prix>=0)
this.prix = prix;
	else 
throw new Exception("prix invalide");}
//lecture du prix
public double getPrix() {
	return prix;
}

	public String getLibelle() {
		if(this.libelle==null)
			return "Inconnu";
		else
	return libelle.toUpperCase();
}
public void setLibelle(String libelle) {
this.libelle=libelle;
}
public double getQtestock() {
	return qtestock;
}
public void setQtestock(double qtestock) throws Exception {
	if (qtestock >=0) {
	this.qtestock = qtestock;	
	}else
		throw new Exception("Erreur ,car  la qte en stock est < 0");
	
}
	//methodes  
	void afficher() {
	System.out.println("-----------------------------");
	System.out.println("libelle est "+libelle+" , prix : "+prix);
	System.out.println("qte en stock est "+qtestock);
	}

	 boolean exists(){
		 return qtestock >0;
	 }
	 
	void  sortieStock(double qteSortie){
	if(qteSortie <= qtestock) {
		qtestock -= qteSortie;
	}

	
	 }
	void entreeStock(double qteEntree) {
		if(qteEntree >0) {
			qtestock +=qteEntree;
		}
	}
	
	//vente
double 	vendre(double qteaVendre){
	double tht  =0;
		if(qtestock >= qteaVendre) {
			sortieStock(qteaVendre);
			
			tht= prix * qteaVendre;
			
		}else {
			System.out.println("Vente impossible : Stock insufissant  , "
					+ "le stock actuel en "+libelle+" est de "+qtestock
					);
		}
		
		return tht;
		
	}
	
}
