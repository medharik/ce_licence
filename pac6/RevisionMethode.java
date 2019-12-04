package pac6;

public class RevisionMethode {
public static void main(String[] args) {
	String []produit= {"hp","dell","sony","acer"};
	int qte[]= {10,0,30,0};
	afficher(produit);
	String []tr=rupture(produit,qte);
	afficher(tr);
	int qteAlerte=10;
 //affiche les produits en alerte  de stock
    alertStock(produit,qte,qteAlerte);	
}

private static void alertStock(String[] produit, int[] qte, int qteAlerte) {
	
	
}

private static String[] rupture(String[] produit, int[] qte) {
	String [] tr=new String[produit.length];
	for (int i = 0; i < tr.length; i++) {
		if(qte[i]==0) {
			tr[i]=produit[i];
		}
	}
	
	return tr;
}

private static void afficher(String[] produit, int[] qte) {

	System.out.println("Liste des produits");
	for (int i = 0; i < produit.length; i++) {
		System.out.println((i+1)+"-"+produit[i]+" : "+qte[i]);
	}
}

private static void afficher(String[] produit) {
System.out.println("Liste des produits");
	for (int i = 0; i < produit.length; i++) {
		if(produit[i] !=null)
		System.out.println((i+1)+"-"+produit[i]);
	}
}
}
