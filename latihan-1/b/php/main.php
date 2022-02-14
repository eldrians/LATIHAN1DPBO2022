<?php

include "TimSepakbola.php";

$Team_A = new TimSepakbola();
$Team_A->setNamaTeam("Paris Saint-Germain");
$Team_A->setNegaraAsalTeam("France");
$Team_A->setTahunBerdiriTeam(1970);
$Team_A->setPemain("Lionel Messi");
$Team_A->setNegaraAsalPemain("Argentina");
$Team_A->setNomorPunggungPemain(30);
$Team_A->setPosisiPemain("FW");

$Team_A2 = new TimSepakbola();

$Team_A2->setPemain("Sergio Ramos");
$Team_A2->setNegaraAsalPemain("Spanyol");
$Team_A2->setNomorPunggungPemain(4);
$Team_A2->setPosisiPemain("DF");

echo ">>> ". $Team_A->getNamaTeam(). " <<<" ."<br>";
echo "<br>";
echo "Tahun Berdiri : ". $Team_A->getTahunBerdiriTeam()."<br>";
echo "Asal Negara : ". $Team_A->getNegaraAsalTeam()."<br>";
echo "Daftar Pemain : "."<br>";
echo "<br>";
echo "=========================". "<br>";
echo "1. ". $Team_A->getPemain()."<br>";
echo "=========================". "<br>";
echo "Kebangsaan : ". $Team_A->getNegaraAsalPemain()."<br>";
echo "Nomor Punggung : ". $Team_A->getNomorPunggungPemain()."<br>";
echo "Posisi : ". $Team_A->getPosisiPemain()."<br>";
echo "=========================". "<br>";
echo "<br>";
echo "=========================". "<br>";
echo "1. ". $Team_A2->getPemain()."<br>";
echo "=========================". "<br>";
echo "Kebangsaan : ". $Team_A2->getNegaraAsalPemain()."<br>";
echo "Nomor Punggung : ". $Team_A2->getNomorPunggungPemain()."<br>";
echo "Posisi : ". $Team_A2->getPosisiPemain()."<br>";
echo "=========================". "<br>";

?>