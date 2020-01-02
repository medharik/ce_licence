package poo_classe;

public class Test2 {
public static void main(String[] args) {
	ProduitAlimentaire pa =new ProduitAlimentaire("lait", "1/1/2019");
ProduitEletro pe=new ProduitEletro("A9",9000, 1," P 9 , doubolle cam");

Produit stock []= { pa,pe};
for (int i = 0; i < stock.length; i++) {
	stock[i].afficher();
	
}
}
}
