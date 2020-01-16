package pac_interface;

public abstract class Technicien  implements Affichable {
private String numero;

public Technicien() {
	// TODO Auto-generated constructor stub
}
public Technicien(String numero) {
	super();
	this.numero = numero;
}

public String getNumero() {
	return numero;
}

public void setNumero(String numero) {
	this.numero = numero;
}
abstract double calculerSalaire();
}

