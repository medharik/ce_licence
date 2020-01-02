package pacCorrection2014;

public class TechnicienDev extends Technicien {
double montantFixe, nombreIntervention;

public TechnicienDev() {
	// TODO Auto-generated constructor stub
}

public TechnicienDev(int numero, double montantFixe, double nombreIntervention) {
	super(numero);
	this.montantFixe = montantFixe;
	this.nombreIntervention = nombreIntervention;
}

void  calculerSalaire(){
	System.out.println("TS DEV ");
 this.salaire=montantFixe+nombreIntervention*25;
	
}
}
