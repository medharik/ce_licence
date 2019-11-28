package pac_revision;

import java.util.Scanner;

public class RevisionBaseJava {

	public static void main(String[] args) {
		
		//demande de n produit 
	int nombreProduits=	saisirNProuduit();
		//demander la saisir des n libelle de produits
String [] libelles=	getLabel(nombreProduits);
		//saisir les prix
double [] prix=  getPrix(libelles);

		//saisir les qte 
int [] qte=getQte(libelles);
		//calculer le ttc
			double ttc=getTtc(prix,qte);
		//calculer le prix
			double moyenne =getMoyenne(prix);
		//le prix max et min 
		int posMax=	getPrixMax(prix);
		int posMin=getPrixMIn(prix);
		//resultat 
		afficher(ttc,posMin,posMax,moyenne, libelles,prix);
		
		
		
	}

	private static void afficher(double ttc, int posMin,
			int posMax, double moyenne, String[] libelles, 
			double[] prix) {

		System.out.println("Le ttc est "+ttc+" MAD");
		System.out.println("le prix moyen est  "+moyenne+" MAD");
		System.out.println("le produit prix  max   est "+prix[posMax]+", \n le prix min est "+prix[posMin]);
		System.out.println("le produit ayant prix   max   est "+libelles[posMax]+", \n le produit ayant prix min est "+libelles[posMin]);

	}

	private static int getPrixMIn(double[] prix) {
		
		double min=prix[0];
		int posMin=0;
		for (int i = 0; i < prix.length; i++) {
			if (min > prix[i]) {
				min=prix[i];
				posMin=i;
			}
		}
		
		return posMin;
	}

	private static int getPrixMax(double[] prix) {
		double max=prix[0];
		int posMax=0;
		for (int i = 0; i < prix.length; i++) {
			if (max < prix[i]) {
				max=prix[i];
				posMax=i;
			}
		}
		
		return posMax;
	}

	private static double[] getPrix(String[] libelles) {
		Scanner clavier = new Scanner(System.in);
		double prix[]=new double[libelles.length];
		for (int i = 0; i < libelles.length; i++) {
			
			System.out.println("Entrer le prix du produit  "+libelles[i]);
			prix[i]=clavier.nextDouble();
			
		}
		return prix;
	}

	private static String[] getLabel(int nombreProduits) {
		Scanner clavier =new Scanner(System.in);
	String [] libelle=new String[nombreProduits];
		for (int i = 0; i < nombreProduits; i++) {
		System.out.println("Entrer le libelle du produit numero "+(i+1));
	libelle[i]=clavier.next();
	}
		return libelle;
	}

	

	private static double getMoyenne(double[] prix) {
		double somme =0;
		for (int i = 0; i < prix.length; i++) {
			somme+=prix[i];
		}
		
		return somme/prix.length;
	}

	private static double getTtc(double[] prix, int[] qte) {
		double ttc=0;
		for (int i = 0; i < qte.length; i++) {
			ttc +=prix[i]*qte[i];
		}
		return ttc;
	}

	private static int[] getQte(String[] libelles) {
		Scanner clavier = new Scanner(System.in);
		int qte[]=new int[libelles.length];
		for (int i = 0; i < libelles.length; i++) {
			
			System.out.println("Entrer la quantite du produit  "+libelles[i]);
			qte[i]=clavier.nextInt();
			
		}
		return qte;
	}



	private static int saisirNProuduit() {
		boolean nombreValide=false;
		Scanner clavier =new Scanner(System.in);
		int essai=3, n=0;
	do {
		System.out.println("Entrer le nombre de produits :");
		
		 n=clavier.nextInt();
		nombreValide=(n>0);
		if (!nombreValide) {
			System.out.println(" nombre incorrect !");
			essai--;
			System.out.println("il vous reste "+essai+" essai"+((essai>1)? "s":""));
		if (essai==0) {
			break;
		}
		}
	} while (!nombreValide);
		
		return n;
	}
	
}
