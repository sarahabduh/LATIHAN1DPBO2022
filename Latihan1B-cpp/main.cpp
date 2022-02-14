#include "1b.cpp"

int main(){

    DaftarTim Tim1;
    DaftarTim Tim2("Real Madrid", "Spanyol", 1902, "Eden", 7, "Vinicius", 20);

    Tim1.setNamaTim("Manchester United");
    Tim1.setNegaraAsal("Inggris");
    Tim1.setTahunBerdiri(1878);
    Tim1.setPemain("David");
    Tim1.setNomor(1);
    Tim1.setPemain2("Dean");
    Tim1.setNomor2(26);

    cout << "+--------------------------------------+" << endl;
    cout << "| Tim 1                                |" << endl;
    cout << "+--------------------------------------+" << endl;
    cout << "Nama Tim       : " << Tim1.getNamaTim() << endl;
    cout << "Negara Asal    : " << Tim1.getNegaraAsal() << endl;
    cout << "Tahun Berdiri  : " << Tim1.getTahunBerdiri() << endl;
    cout << "Pemain         : " << " - " << Tim1.getPemain() << " [" << Tim1.getNomor() << "]" << endl;
    cout << "                  - " << Tim1.getPemain2() << " [" << Tim1.getNomor2() << "]" << endl;
    cout << endl;

    cout << "+--------------------------------------+" << endl;
    cout << "| Tim 2                                |" << endl;
    cout << "+--------------------------------------+" << endl;
    cout << "Nama Tim       : " << Tim2.getNamaTim() << endl;
    cout << "Negara Asal    : " << Tim2.getNegaraAsal() << endl;
    cout << "Tahun Berdiri  : " << Tim2.getTahunBerdiri() << endl;
    cout << "Pemain         : " << " - " << Tim2.getPemain() << " [" << Tim2.getNomor() << "]" << endl;
    cout << "                  - " << Tim2.getPemain2() << " [" << Tim2.getNomor2() << "]" << endl;

    return 0;
}

