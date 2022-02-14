<?php

class DaftarMahasiswa{
    
    private $NIM = "";
    private $Nama = "";
    private $Gender = "";
    private $Program_Studi = "";
    private $Semester = "";
    
    public function __construct($NIM = "", $Nama = "", $Gender = "", $Program_Studi = "", $Semester = ""){
        $this->NIM = $NIM;
        $this->Nama = $Nama;
        $this->Gender = $Gender;
        $this->Program_Studi = $Program_Studi;
        $this->Semester = $Semester;
    }


    public function setNIM($NIM){
        $this->NIM = $NIM;
    }

    public function getNIM(){
        return $this->NIM;
    }

    public function setNama($Nama){
        $this->Nama = $Nama;
    }

    public function getNama(){
        return $this->Nama;
    }

    public function setGender($Gender){
        $this->Gender = $Gender;
    }

    public function getGender(){
        return $this->Gender;
    }

    public function setProgram_Studi($Program_Studi){
        $this->Program_Studi = $Program_Studi;
    }

    public function getProgram_Studi(){
        return $this->Program_Studi;
    }

    public function setSemester($semester){
        $this->semester = $semester;
    }

    public function getSemester(){
        return $this->semester;
    }
}

?>