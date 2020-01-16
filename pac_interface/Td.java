package pac_interface;

public class Td extends Technicien {

	double salaireFixe;
	@Override
	double calculerSalaire() {
		// TODO Auto-generated method stub
		return salaireFixe;
	}
	public Td(String numero, double salaireFixe) {
		super(numero);
		this.salaireFixe = salaireFixe;
	}
	@Override
	public void afficher() {
		System.out.println("t. dev "+getNumero());
		
	}

}
