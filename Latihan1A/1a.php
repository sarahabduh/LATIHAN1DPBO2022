<?php

// Buat program untuk membuat daftar mahasiswa yang memiliki atribut NIM, 
// Nama, Jenis Kelamin, Program Studi, dan Semester, menggunakan bahasa PHP!

class Mahasiswa
{
    private $nim = 0;
    private $nama = "";
    private $gender = "";
    private $prodi = "";
    private $semester = 0;

    public function __construct($nim = 0, $nama = "", $gender = "", $prodi = "", $semester = 0){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->gender = $gender;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }

    // NIM
    public function setNIM($nim){
        $this->nim = $nim;
    }

    public function getNIM(){
        return $this->nim;
    }

    // Nama
    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    // Gender
    public function setGender($gender){
        $this->gender = $gender;
    }

    public function getGender(){
        return $this->gender;
    }

    // Prodi
    public function setProdi($prodi){
        $this->prodi = $prodi;
    }

    public function getProdi(){
        return $this->prodi;
    }

    // Semester
    public function setSemester($semester){
        $this->semester = $semester;
    }

    public function getSemester(){
        return $this->semester;
    }

}

?>