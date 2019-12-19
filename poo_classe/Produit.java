package poo_classe;

public class Produit {
	//attributs <=> fields
	String libelle;
	double prix;
	double qtestock;
 
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
