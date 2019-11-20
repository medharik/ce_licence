package pac4;

import java.util.Scanner;

public class Bilan1 {

	public static void main(String[] args) {
		
		Scanner clavier=new Scanner(System.in);
		
		System.out.println("Entrer le nombre de notes ");
		int nombreNote=clavier.nextInt();
		double note[]=new double [nombreNote];
		boolean valide=false;
		for (int i = 0; i < note.length; i++) {
		do {
			System.out.println("Entrer la note numero "+(i+1));
			note[i]=clavier.nextDouble();
			 valide=note[i]>=0 && note[i]<=20;
			if (!valide) {
				System.out.println("Erreur, note incorrecte");
			}
			
		}while(!valide);
		
			
		}
		
		
		
		
		//calculer la somme deds notes 
		double somme=0;
		for (int i = 0; i < note.length; i++) {
			somme+=note[i];
		}
		double moyenne=somme/note.length;
		System.out.println(" la moyenne est "+moyenne );

		if (moyenne <8) {
			System.out.println("Echec");
		}else if(moyenne < 10) {
			System.out.println("Ratrappage");
		}else {
			System.out.println("Reussite");
		}
		
	}
}
