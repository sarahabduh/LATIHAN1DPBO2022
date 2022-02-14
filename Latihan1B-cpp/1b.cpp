#include <iostream>
#include <string>

using namespace std;

class DaftarTim{

    private:

    string namaTim;
    string negaraAsal;
    int tahunBerdiri;
    string pemain;
    string pemain2;
    int nomor;
    int nomor2;

    public:

    DaftarTim(){
    }

    DaftarTim(string namaTim, string negaraAsal, int tahunBerdiri, string pemain, int nomor, string pemain2, int nomor2){
        this->namaTim = namaTim;
        this->negaraAsal = negaraAsal;
        this->tahunBerdiri = tahunBerdiri;
        this->pemain = pemain;
        this->pemain2 = pemain2;
        this->nomor = nomor;
        this->nomor2 = nomor2;
    }

    // Nama Tim
    void setNamaTim(string namaTim){
        this->namaTim = namaTim;
    }

    string getNamaTim(){
        return this->namaTim;
    }

    // Negara Asal
    void setNegaraAsal(string negaraAsal){
        this->negaraAsal = negaraAsal;
    }

    string getNegaraAsal(){
        return this->negaraAsal;
    }

    // Tahun Berdiri
    void setTahunBerdiri(int tahunBerdiri){
        this->tahunBerdiri = tahunBerdiri;
    }

    int getTahunBerdiri(){
        return this->tahunBerdiri;
    }

    // Pemain
    void setPemain(string pemain){
        this->pemain = pemain;
    }

    string getPemain(){
        return this->pemain;
    }

    void setPemain2(string pemain2){
        this->pemain2 = pemain2;
    }

    string getPemain2(){
        return this->pemain2;
    }

    // Nomor Punggung
    void setNomor(int nomor){
        this->nomor = nomor;
    }

    int getNomor(){
        return this->nomor;
    }

    void setNomor2(int nomor2){
        this->nomor2 = nomor2;
    }

    int getNomor2(){
        return this->nomor2;
    }

    ~DaftarTim(){
    }

};