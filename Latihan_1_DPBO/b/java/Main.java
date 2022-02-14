import java.util.*;

public class Main{
    public static void main (String[] args){
        
        TimSepakbola Team_A = new TimSepakbola("Paris_Saint-Germain", "France", 1970, "Lionel_Messi", "Argentina", 30, "FW");
        // Scanner scan = new Scanner(System.in);
        // String NamaTeam;
        
        // Team_A.setNamaTeam("Paris Saint-Germain");
        // Team_A.setNegaraAsalTeam("France");
        // Team_A.setTahunBerdiriTeam(1970);
        // Team_A.setPemain("Lionel Messi");
        // Team_A.setNegaraAsalPemain("Argentina");
        // Team_A.setNomorPunggungPemain(30);
        // Team_A.setPosisiPemain("FW");

        TimSepakbola Team_B = new TimSepakbola();
        Team_B.setPemain("Sergio Ramos");
        Team_B.setNegaraAsalPemain("Spanyol");
        Team_B.setNomorPunggungPemain(4);
        Team_B.setPosisiPemain("DF");

        System.out.println(">>> " + Team_A.getNamaTeam() + " <<<");
        System.out.println();
        System.out.println("Tahun Berdiri Team : " + Team_A.getTahunBerdiriTeam());
        System.out.println("Asal Negara Team : " + Team_A.getNegaraAsalTeam());
        System.out.println("Daftar Pemain :");
        System.out.println();
        System.out.println("=========================");
        System.out.println("1. " + Team_A.getPemain());
        System.out.println("=========================");
        System.out.println("Kebangsaan : " + Team_A.getNegaraAsalPemain());
        System.out.println("Nomor Punggung : " + Team_A.getNomorPunggungPemain());
        System.out.println("Posisi : " + Team_A.getPosisiPemain());
        System.out.println("=========================");
        System.out.println();
        System.out.println("=========================");
        System.out.println("2. " + Team_B.getPemain());
        System.out.println("=========================");
        System.out.println("Kebangsaan : " + Team_B.getNegaraAsalPemain());
        System.out.println("Nomor Punggung : " + Team_B.getNomorPunggungPemain());
        System.out.println("Posisi : " + Team_B.getPosisiPemain());
        System.out.println("=========================");
    }

}
