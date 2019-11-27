package pac_methodes;

import java.util.Scanner;

public class Test2 {
public static void main(String[] args) {
double note=	saisirNote();
System.out.println("la note est "+note);
String observation=	observer(note);
System.out.println(observation);
}




private static String observer(double note) {
	if (note>=10) {
		return "MODULE VALIED";
	}else {
		return "MUDULE NON VALIDE";
	}
	
}




private static double saisirNote() {
Scanner clavier =new Scanner(System.in);
System.out.println("Entrer une note");
double note=clavier.nextDouble();
	return note;

}
}
