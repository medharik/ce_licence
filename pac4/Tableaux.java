package pac4;

import java.util.Scanner;

public class Tableaux {

	public static void main(String[] args) {
		
		Scanner clavier =new Scanner(System.in); 
		//tableau : ensemble d'info de meme type 
		double note[];//declaration d'un tableau de note (double)
		note= new double[4];// construire un tableau de 3 doubles , sa length=3

		System.out.println("le nombre de note est de "+note.length);
		
		System.out.println(" note numero 1 est "+note[0]);
		note[1]=13;
		note[2]=12;
		note[3]=0;
		
		for (int i = 0; i < note.length; i++) {
			System.out.println("note numero "+(i+1)+" est : "+note[i]);
		}
		
		
	double somme=0;
		for (int i = 0; i < note.length; i++) {
				somme +=note[i];// somme =somme +...
		}
		System.out.println(" la somme est "+somme );
		
		double moyenne =somme/note.length;
		
		System.out.println(" la moyenne est "+moyenne );
		
		
		
	}
	
	
}
