public class DaftarTim {
    private String namaTim;
    private String negaraAsal;
    private int tahunBerdiri;
    private String pemain;
    private int nomor;
    private String pemain2;
    private int nomor2;

    public DaftarTim(String namaTim, String negaraAsal, int tahunBerdiri, String pemain, int nomor, String pemain2, int nomor2){
        this.namaTim = namaTim;
        this.negaraAsal = negaraAsal;
        this.tahunBerdiri = tahunBerdiri;
        this.pemain = pemain;
        this.nomor = nomor;
        this.pemain2 = pemain2;
        this.nomor2 = nomor2;
    }

    public DaftarTim(){
    }

    // Nama Tim
    public String getNamaTim(){
        return namaTim;
    }

    public void setNamaTim(String namaTim){
        this.namaTim = namaTim;
    }

    // Negara Asal
    public String getNegaraAsal(){
        return negaraAsal;
    }

    public void setNegaraAsal(String negaraAsal){
        this.negaraAsal = negaraAsal;
    }

    // Tahun Berdiri
    public int getTahunBerdiri(){
        return tahunBerdiri;
    }

    public void setTahunBerdiri(int tahunBerdiri){
        this.tahunBerdiri = tahunBerdiri;
    }

    // Pemain
    public String getPemain(){
        return pemain;
    }

    public void setPemain(String pemain){
        this.pemain = pemain;
    }

    public String getPemain2(){
        return pemain2;
    }

    public void setPemain2(String pemain2){
        this.pemain2 = pemain2;
    }

    // Pemain
    public int getNomor(){
        return nomor;
    }

    public void setNomor(int nomor){
        this.nomor = nomor;
    }

    public int getNomor2(){
        return nomor2;
    }

    public void setNomor2(int nomor2){
        this.nomor2 = nomor2;
    }
}