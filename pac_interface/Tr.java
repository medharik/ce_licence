package pac_interface;

public class Tr  extends Technicien{

public Tr(String numero, double tarifHoraire, double nombreHeure) {
		super(numero);
		this.tarifHoraire = tarifHoraire;
		this.nombreHeure = nombreHeure;
	}
private 	double tarifHoraire;
private	double nombreHeure;
	public Tr() {
	super();
}
	public double getTarifHoraire() {
	return tarifHoraire;
}
public void setTarifHoraire(double tarifHoraire) {
	this.tarifHoraire = tarifHoraire;
}
public double getNombreHeure() {
	return nombreHeure;
}
public void setNombreHeure(double nombreHeure) {
	this.nombreHeure = nombreHeure;
}
	@Override
	double calculerSalaire() {
		// TODO Auto-generated method stub
double salaire=nombreHeure*tarifHoraire;
		return salaire;	
	}
	@Override
	public void afficher() {
		System.out.println("T. reseau "+getNumero());
		
	}

}
