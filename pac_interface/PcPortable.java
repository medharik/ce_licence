package pac_interface;

public class PcPortable implements Affichable
{
String config;

public PcPortable(String config) {
	super();
	this.config = config;
}

@Override
public void afficher() {
System.out.println("config "+config);
	
}
}
