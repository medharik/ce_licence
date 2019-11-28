package pac_revision;

import java.util.Scanner;

public class CorrectionMoyenne {
 public static void main(String[] args) {
	
	 // saisie du nombre matieres 
	 int nombreMatiere=  saisirNombreMatiere();
	 //saisie des noms des matieres
	String noms [] = saisirNomMatiere(nombreMatiere);
	 //saisie des notes
	 double notes[]= saisirNote(noms);
	 //calcul de la moyenne 
	 double moyenne=    calculMoyenne(notes);
	 System.out.println("la moyenne est "+moyenne);
	 
}

private static int saisirNombreMatiere() {
	Scanner clavier=new Scanner(System.in);
	System.out.println("Entrer le nombre de matieres ");
	int n=clavier.nextInt();
	return n;
}

private static String[] saisirNomMatiere(int nombreMatiere) {
String [] nom=new String[nombreMatiere];
Scanner clavier=new Scanner(System.in);

for (int i = 0; i < nom.length; i++) {
	System.out.println("Entrer le nom numero "+(i+1));
nom[i]=clavier.next();
}
	
	return nom;
}

private static double[] saisirNote(String[] noms) {
	Scanner clavier=new Scanner(System.in);
double note[]=new double[noms.length];
for (int i = 0; i < note.length; i++) {
	System.out.println("Entrer note de la matiere "+noms[i]);
	note[i]=clavier.nextDouble();
}
	return note;
}

private static double calculMoyenne(double[] notes) {
double somme=0;
for (int i = 0; i < notes.length; i++) {
	somme +=notes[i];
}
	return somme/notes.length;
}
}
