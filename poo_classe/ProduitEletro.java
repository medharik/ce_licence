package poo_classe;

public class ProduitEletro extends Produit {
private String conf;

@Override
	void afficher() {
		
		super.afficher();
		System.out.println("COnfig est : "+conf);
	}


public ProduitEletro() {
	super();
}


public ProduitEletro(String libelle, double prix, double qteStock, String conf) {
	super(libelle, prix, qteStock);
	this.conf = conf;
}


public String getConf() {
	return conf;
}

public void setConf(String conf) {
	this.conf = conf;
}

}
