<?php

    include "1a.php";



    $Mahasiswa1 = new Mahasiswa(2002939, "Sarah", "Perempuan", "Ilmu Komputer", 4);
  
    echo "<b> Mahasiswa 1: </b>". "<br>";
    echo "| NIM             : ". $Mahasiswa1->getNIM(). "<br>";
    echo "| Nama            : ". $Mahasiswa1->getNama(). "<br>";
    echo "| Jenis Kelamin   : ". $Mahasiswa1->getGender(). "<br>";
    echo "| Program Studi   : ". $Mahasiswa1->getProdi(). "<br>";
    echo "| Semester        : ". $Mahasiswa1->getSemester(). "<br><br>";

    $Mahasiswa2 = new Mahasiswa();
    $Mahasiswa2->setNIM(1902939);
    $Mahasiswa2->setNama("Abduh");
    $Mahasiswa2->setGender("Laki-laki");
    $Mahasiswa2->setProdi("Seni");
    $Mahasiswa2->setSemester(6);

    echo "<b> Mahasiswa 2: </b>". "<br>";
    echo "| NIM             : ". $Mahasiswa2->getNIM(). "<br>";
    echo "| Nama            : ". $Mahasiswa2->getNama(). "<br>";
    echo "| Jenis Kelamin   : ". $Mahasiswa2->getGender(). "<br>";
    echo "| Program Studi   : ". $Mahasiswa2->getProdi(). "<br>";
    echo "| Semester        : ". $Mahasiswa2->getSemester();
?>