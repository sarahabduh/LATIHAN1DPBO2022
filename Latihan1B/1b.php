<?php

// Buat program untuk membuat daftar tim sepakbola yang memiliki atribut 
// nama tim, negara asal tim, tahun berdiri tim, serta pemain, menggunakan 
// setiap bahasa (C++, PHP, Python dan Java)!

class DaftarTim
{
    private $namaTim = "";
    private $negaraAsal = "";
    private $tahunBerdiri = 0;
    private $pemain = "";
    private $pemain2 = "";
    private $nomor = 0;
    private $nomor2 = 0;

    public function __construct($namaTim = "", $negaraAsal = "", $tahunBerdiri = 0, 
        $pemain = "", $nomor = 0, $pemain2 = "", $nomor2 = 0){
        $this->namaTim = $namaTim;
        $this->negaraAsal = $negaraAsal;
        $this->tahunBerdiri = $tahunBerdiri;
        $this->pemain = $pemain;
        $this->nomor = $nomor;
        $this->pemain2 = $pemain2;
        $this->nomor2 = $nomor2;
    }

    // Nama Tim
    public function setNamaTim($namaTim){
        $this->namaTim = $namaTim;
    }

    public function getNamaTim(){
        return $this->namaTim;
    }

    // Negara Asal
    public function setNegaraAsal($negaraAsal){
        $this->negaraAsal = $negaraAsal;
    }

    public function getNegaraAsal(){
        return $this->negaraAsal;
    }

    // Tahun Berdiri
    public function setTahunBerdiri($tahunBerdiri){
        $this->tahunBerdiri = $tahunBerdiri;
    }

    public function getTahunBerdiri(){
        return $this->tahunBerdiri;
    }

    // Pemain
    public function setPemain($pemain){
        $this->pemain = $pemain;
    }

    public function getPemain(){
        return $this->pemain;
    }

    public function setPemain2($pemain2){
        $this->pemain2 = $pemain2;
    }

    public function getPemain2(){
        return $this->pemain2;
    }

    // Nomor Punggung
    public function setNomor($nomor){
        $this->nomor = $nomor;
    }

    public function getNomor(){
        return $this->nomor;
    }

    public function setNomor2($nomor2){
        $this->nomor2 = $nomor2;
    }

    public function getNomor2(){
        return $this->nomor2;
    }

}

?>