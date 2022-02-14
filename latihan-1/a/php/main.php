<?php

include "DaftarMahasiswa.php";

echo "Daftar Mahasiswa :"."<br>";
echo "<br>";
$Mahasiswa = new DaftarMahasiswa();
$Mahasiswa->setNIM("2000352");
$Mahasiswa->setNama("Axel Eldrian Hadiwibowo");
$Mahasiswa->setGender("Male");
$Mahasiswa->setProgram_Studi("Ilmu Komputer");
$Mahasiswa->setSemester("4");

echo "- NIM : ".$Mahasiswa->getNIM()."<br>";
echo "- Nama : ".$Mahasiswa->getNama()."<br>";
echo "- Gender        : ".$Mahasiswa->getGender()."<br>";
echo "- Program_Studi : ".$Mahasiswa->getProgram_Studi()."<br>";
echo "- Semester      : ".$Mahasiswa->getSemester()."<br>";

?>