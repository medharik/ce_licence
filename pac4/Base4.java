package pac4;

import java.util.Scanner;

public class Base4 {

	public static void main(String[] args) {
		// les boucles while  (tant que )
		// pour un nombre d'iteration inconnu a l'avance
		
		Scanner clavier=new Scanner(System.in);
		String nom="";
		//int age =19;

		int i=3;
		do {
			
		System.out.println("Entrez le nom de votre ecole ");
		nom=clavier.next();
		 
 if(!nom.equals("cesa")) {
			 i--;
			 System.out.println("erreur, il vous reste "+i+" essai(s)");

			 if (i==0) {
					System.out.println("fin du programme , nombre d'erreur depasse");
					return ;
				}
			 
		 }
		
		
		} while (! nom.equals("cesa"));
		System.out.println("mot secret trouvé apres "+(3-i)+" ESSAI(S)");
		
		
	}
}
