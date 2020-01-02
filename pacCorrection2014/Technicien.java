package pacCorrection2014;

public abstract class Technicien {
int numero;
double salaire;
public Technicien() {


}

public Technicien(int numero) {
	this.numero = numero;
}
 abstract void calculerSalaire() ;

}
