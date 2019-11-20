package pac3;

import java.util.Scanner;

public class Exo1 {
	public static void main(String[] args) {
	
		Scanner clavier = new Scanner(System.in);
	 /* a0,a1,b1;
		a0,b1,a2; 
		a0,b1;
		a0,a1 
		a0,b1
		a0,b0
		a0,b1
		a0,
		a0,a1,b1
		!
		*/
		/*
		 * i-0 | A0 , C0; i=1 | A1 , B1
		 */
		
		for (int i = 0; i<0 ; i++) {
			System.out.println("A "+i);
		if(i==3) {
			System.out.println("B "+i);
			break;

		}
			
			System.out.println("C "+i);
		}
		
		
		System.out.println("entrer la note numero 1");
		double note=clavier.nextDouble();
		double moyenne=note;
		System.out.println("la moyenne est : "+moyenne);
//		if (moyenne>=10) {
//			System.out.println("Reussite");
//		} else if(moyenne >8 && moyenne<10 ) {
//			System.out.println("Ratrappage");
//		}else {
//			System.out.println("Echec");
//		}
		if(moyenne<=8) {
			System.out.println("Echec");
		} 
		
		else if(moyenne <10) {
			System.out.println("Ratrappage");
		}else {
			System.out.println("Reussite");
		}
		
	//	System.out.println((moyenne>=10? "Reussite":"Echec"));
	
		
	}
}
