package poo_classe;
// HERITAGE (GENERALISATION) 
// 2 eme principe de la POO
// permet de resultiliser le code existant (factoriser )
// meme sien l'absence di code source
// ProduitAlimentaire (classe fille ou subclasse) 
//est (extension) un produit (classe mere / super classeour parent)
public class ProduitAlimentaire extends Produit   {
private String dateExpiration;



public ProduitAlimentaire() {
super();
}
public ProduitAlimentaire(String libelle, double prix, double qteStock, String dateExpiration) {
	super(libelle, prix, qteStock);
	this.dateExpiration = dateExpiration;
	
}

public ProduitAlimentaire(String libelle, String dateExpiration) {
super();
this.setLibelle(libelle);
this.dateExpiration=dateExpiration;
}
public String getDateExpiration() {
	return dateExpiration;
}

public void setDateExpiration(String dateExpiration) {
	this.dateExpiration = dateExpiration;
}
}
