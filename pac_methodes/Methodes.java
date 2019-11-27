package pac_methodes;

import java.util.Scanner;import org.omg.Messaging.SyncScopeHelper;

public class Methodes {
public static void main(String[] args) {
	//methode : module traitant une tache dans le programme main
	//POA
	double tprix[];
	tprix=saisirPrix();
	double ttc =calculerTtc(tprix);

	double moyenne =calculeMoyenne(ttc,tprix.length);
	
System.out.println(" le ttc est "+ttc+" DHS");
System.out.println(" la moyenne est "+moyenne);
}










//------------------------------------------------------------------
private static double calculeMoyenne(double somme, int nombreNote) {
	double moyenne =somme/nombreNote;
	return moyenne;
}

private static double calculerTtc(double[] p) {

	double ttc=0;
	for (int i = 0; i < p.length; i++) {
		ttc+=p[i];
	}
	return ttc;
}

private static double[] saisirPrix() {
	Scanner clavier =new Scanner(System.in);
	System.out.println("Entrer le nombre de produit ");
	int n=clavier.nextInt();
	double [] prix=new double[n];
	for (int i = 0; i < n; i++) {
		System.out.println("Entrer le prix numero "+(i+1));
		prix[i]=clavier.nextDouble();
	}
	
	return prix;
}
}
