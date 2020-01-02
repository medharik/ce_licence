package pacCorrection2014;

public class Remuneration  {
public static void main(String[] args) {
TechncienReseaux tsatsy =new TechncienReseaux(10, 44, 80,40);	
TechnicienDev meriem=new TechnicienDev(11, 2800, 10);

Technicien t[]= {tsatsy,meriem};
for (int i = 0; i < t.length; i++) {
	t[i].calculerSalaire();
	System.out.println(t[i].numero+" : "+t[i].salaire);
}	
}
//dynamicBinding : liaison tardive
}
