public class TimSepakbola {

    private String NamaTeam;
    private String NegaraAsalTeam;
    private int TahunBerdiriTeam;
    private String Pemain;
    private String NegaraAsalPemain;
    private int NomorPunggungPemain;
    private String PosisiPemain;

    public TimSepakbola(String NamaTeam, String NegaraAsalTeam, int TahunBerdiriTeam, String Pemain, String NegaraAsalPemain, int NomorPunggungPemain, String PosisiPemain){
        this.NamaTeam = NamaTeam;
        this.NegaraAsalTeam = NegaraAsalTeam;
        this.TahunBerdiriTeam = TahunBerdiriTeam;
        this.Pemain = Pemain;
        this.NegaraAsalPemain = NegaraAsalPemain;
        this.NomorPunggungPemain = NomorPunggungPemain;
        this.PosisiPemain = PosisiPemain;
    }

    public TimSepakbola(){}

    public void setNamaTeam(String NamaTeam){
        this.NamaTeam = NamaTeam;
    }

    public String getNamaTeam(){
        return NamaTeam;
    }

    public void setNegaraAsalTeam(String NegaraAsalTeam){
        this.NegaraAsalTeam = NegaraAsalTeam;
    }

    public String getNegaraAsalTeam(){
        return NegaraAsalTeam;
    }

    public void setTahunBerdiriTeam(int TahunBerdiriTeam){
        this.TahunBerdiriTeam = TahunBerdiriTeam;
    }

    public int getTahunBerdiriTeam(){
        return TahunBerdiriTeam;
    }

    public void setPemain(String Pemain){
        this.Pemain = Pemain;
    }

    public String getPemain(){
        return Pemain;
    }

    public void setNegaraAsalPemain(String NegaraAsalPemain){
        this.NegaraAsalPemain = NegaraAsalPemain;
    }

    public String getNegaraAsalPemain(){
        return NegaraAsalPemain;
    }

    public void setNomorPunggungPemain(int NomorPunggungPemain){
        this.NomorPunggungPemain = NomorPunggungPemain;
    }

    public int getNomorPunggungPemain(){
        return NomorPunggungPemain;
    }

    public void setPosisiPemain(String PosisiPemain){
        this.PosisiPemain = PosisiPemain;
    }

    public String getPosisiPemain(){
        return PosisiPemain;
    }
}