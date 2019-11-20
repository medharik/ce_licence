package pac2;

import java.util.Scanner;

import javax.swing.plaf.synth.SynthSeparatorUI;

public class Test {
public static void main(String[] args) {

	Scanner clavier=new Scanner(System.in);
System.out.println("Entrer votre age ");
int age =clavier.nextInt();
System.out.println("entrer votre taille");
double taille= clavier.nextDouble();
System.out.println("votre age est de "+age+" ans");
System.out.println(" taille est de "+taille);
boolean majeur=age>21;
if (majeur) {
System.out.println("vous etes Majeur");	
} else {
System.out.println(" Vous etes Mineur ");
}
String majorite=(age>21)?  "Majeur":"Mineur";

System.out.println("Vous etes "+((age>21)?  "Majeur":"Mineur"));
System.out.println(majorite);
}
}
