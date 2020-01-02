package pacCorrection2014;

public class TechncienReseaux  extends Technicien{
double nombreHeureTravail, tarifHoraire, pctHeureSup;

public TechncienReseaux() {
}

public TechncienReseaux(int numero, double nombreHeureTravail, double tarifHoraire, double pctHeureSup) {
	super(numero);
	this.nombreHeureTravail = nombreHeureTravail;
	this.tarifHoraire = tarifHoraire;
	this.pctHeureSup = pctHeureSup;
	
}
void  calculerSalaire(){
	System.out.println("TS RES");
	if(nombreHeureTravail<=35) {
		 this.salaire=tarifHoraire*nombreHeureTravail;
	}else {
		 double nombreHeureSup=nombreHeureTravail-35;
		 this.salaire=35*tarifHoraire+nombreHeureSup*tarifHoraire*(1+pctHeureSup/100);
	}
			
}






	
}
