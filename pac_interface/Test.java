package pac_interface;

public class Test {
public static void main(String[] args) {
	Technicien t[]= {new Td("td1",7000), new Tr("tr1", 40, 100)};
	for (int i = 0; i < t.length; i++) {
		System.out.println(" le salaire de "+t[i].getNumero()+" est "+
	t[i].calculerSalaire()+"$");
	}
	
	Affichable a[]= {new Td("td1",7000), new Tr("tr1", 40, 100), new PcPortable("hp core i3")};
for (int i = 0; i < a.length; i++) {
	a[i].afficher();
}
}
}
