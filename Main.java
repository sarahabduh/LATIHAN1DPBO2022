public class Main {
    public static void main(String[] args) {
        DaftarTim Tim1 = new DaftarTim();
        Tim1.setNamaTim("Manchester United");
        Tim1.setNegaraAsal("Inggris");
        Tim1.setTahunBerdiri(1878);
        Tim1.setPemain("David");
        Tim1.setNomor(1);
        Tim1.setPemain2("Dean");
        Tim1.setNomor2(26);

        DaftarTim Tim2 = new DaftarTim("Real Madrid", "Spanyol", 1902, "Eden", 7, "Vinicius", 20);

        System.out.println("+--------------------------------------+");
        System.out.println("| Tim 1                                |");
        System.out.println("+--------------------------------------+");
        System.out.println("Nama Tim      : " + Tim1.getNamaTim());
        System.out.println("Negara Asal   : " + Tim1.getNegaraAsal());
        System.out.println("Tahun Berdiri : " + Tim1.getTahunBerdiri());
        System.out.println("Pemain: ");
        System.out.print("- " + Tim1.getPemain()); 
        System.out.print(" [" + Tim1.getNomor());
        System.out.println("]");
        System.out.print("- " + Tim1.getPemain2()); 
        System.out.print(" [" + Tim1.getNomor2());
        System.out.println("]\n");

        System.out.println("+--------------------------------------+");
        System.out.println("| Tim 2                                |");
        System.out.println("+--------------------------------------+");
        System.out.println("Nama Tim      : " + Tim2.getNamaTim());
        System.out.println("Negara Asal   : " + Tim2.getNegaraAsal());
        System.out.println("Tahun Berdiri : " + Tim2.getTahunBerdiri());
        System.out.println("Pemain: ");
        System.out.print("- " + Tim2.getPemain()); 
        System.out.print(" [" + Tim2.getNomor());
        System.out.println("]");
        System.out.print("- " + Tim2.getPemain2()); 
        System.out.print(" [" + Tim2.getNomor2());
        System.out.println("]\n");
        
    }
    
}
