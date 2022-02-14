<?php

    include "1b.php";

    $Tim1 = new DaftarTim("Manchester United", "Inggris", 1878, "David", 1, "Dean", 26);

    echo "| <b> Tim 1: </b>". "<br>";
    echo "========================". "<br>";
    echo "| Nama Tim        : ". $Tim1->getNamaTim(). "<br>";
    echo "| Negara Asal     : ". $Tim1->getNegaraAsal(). "<br>";
    echo "| Tahun Berdiri   : ". $Tim1->getTahunBerdiri(). "<br>";
    echo "========================". "<br>";
    echo "| Nama Pemain 1   : ". $Tim1->getPemain(). "<br>";
    echo "| Nomor Punggung  : ". $Tim1->getNomor(). "<br>";
    echo "| ---------------------------------------". "<br>";
    echo "| Nama Pemain 2   : ". $Tim1->getPemain2(). "<br>";
    echo "| Nomor Punggung  : ". $Tim1->getNomor2(). "<br>";
    echo "========================". "<br><br>";

    $Tim2 = new DaftarTim();
    $Tim2->setNamaTim("Real Madrid");
    $Tim2->setNegaraAsal("Spanyol");
    $Tim2->setTahunBerdiri(1902);
    $Tim2->setPemain("Eden");
    $Tim2->setNomor(7);
    $Tim2->setPemain2("Vinicius");
    $Tim2->setNomor2(20);

    echo "| <b> Tim 2: </b>". "<br>";
    echo "========================". "<br>";
    echo "| Nama Tim        : ". $Tim2->getNamaTim(). "<br>";
    echo "| Negara Asal     : ". $Tim2->getNegaraAsal(). "<br>";
    echo "| Tahun Berdiri   : ". $Tim2->getTahunBerdiri(). "<br>";
    echo "========================". "<br>";
    echo "| Nama Pemain 1   : ". $Tim2->getPemain(). "<br>";
    echo "| Nomor Punggung  : ". $Tim2->getNomor(). "<br>";
    echo "| ---------------------------------------". "<br>";
    echo "| Nama Pemain 2   : ". $Tim2->getPemain2(). "<br>";
    echo "| Nomor Punggung  : ". $Tim2->getNomor2(). "<br>";
    echo "========================". "<br><br>";
?>