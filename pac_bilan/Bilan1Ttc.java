package pac_bilan;

import java.util.Scanner;

public class Bilan1Ttc {
	//A- Edition de note pour un etudiant (le nom)
//ex : Editer , en JAVA , un code source permettant de 
//saisir n () matieres  et n coeficients avec n  notes valides 
//(notre entre 0 et 20, le nombre d'erreurs successive autorise est de 3 )	
// le programme doit 	afficher :
	/*a- la somme des notes 
	b- la note moyenne 
	c- les notes max et min
	d-le nom de la matieres ayant la note max 
	e- calculer l'ecart type 
	RQ: MATh.sqrt est la racine et puissance au 2 Math.pow(x,2) 
//B- refaire le programme pour 3 etudiants

*/	public static void main(String[] args) {
		
		Scanner clavier =new Scanner(System.in);
		System.out.println("Entrer le nombre de produits : ");
		int nombreProduits=clavier.nextInt();
		//on declare et initialise les tableaux
		String nom[]=new String[nombreProduits];
		double []  prix ,qte;
		prix=new double [nombreProduits];
		qte=new double[nombreProduits];

		//parcourir les tabeleaux  pour la saisie 
		// les noms 
		for (int i = 0; i < qte.length; i++) {
			System.out.println("Entrer le nom du produit numero "+(i+1));
			nom[i]=clavier.next();
			
		}
		boolean qteValide=false, prixValide=false;
		// les prix et qtes 
		for (int i = 0; i < qte.length; i++) {
			
		do {
			System.out.println("Entrer le prix de "+nom[i]+" : ");
			prix[i]=clavier.nextDouble();
			prixValide=prix[i]>0;
			if (!prixValide) {
			System.out.println("Prix incorrect");	
			}
		} while (!prixValide);
			
		do {

			System.out.println("Entrer la qte  de "+nom[i]+" : ");
			qte[i]=clavier.nextDouble();
			qteValide=qte[i]>0;
			if (!qteValide) {
				System.out.println(" la qte est incorrecte");
			}
		} while (!qteValide);
			
		}//fin de for de  la saisie
		
		//calcul de la somme 
	double ttc =0;
		for (int i = 0; i < qte.length; i++) {
			ttc+=prix[i]*qte[i];
			
		}
		System.out.println("le ttc est "+ttc+" $");
		
		double max=prix[0],min=prix[0];
		
		for(int i = 0; i < qte.length; i++) {
			if (prix[i]<min) {
				min=prix[i];
				
			}
			if (max<prix[i]) {
				max=prix[i];
			}
		}
		System.out.println(" le prix max est "+max+", prix min est "+min);
		int posMin=0,posMax=0;
	
		for (int i = 0; i < qte.length; i++) {
			if (prix[i]==min) {
				posMin=i;
			}
			if (prix[i]==max) {
				posMax=i;
			}
		}
		
		
		System.out.println(" le produit le moins cher est "+nom[posMin]);
		System.out.println(" le produit le plus cher est "+nom[posMax]);

	}
}
