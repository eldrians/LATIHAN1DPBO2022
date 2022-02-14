<?php

class TimSepakbola{

    private $NamaTeam = "";
    private $NegaraAsalTeam = "";
    private $TahunBerdiriTeam = 0;
    private $Pemain = "";
    private $NegaraAsalPemain = "";
    private $NomorPunggungPemain = 0;
    private $PosisiPemain = "";

    public function __construct($NamaTeam = "", $NegaraAsalTeam = "", $TahunBerdiriTeam = 0, $Pemain = "", $NegaraAsalPemain = "", $NomorPunggungPemain = 0, $PosisiPemain = ""){
        $this->NamaTeam = $NamaTeam;
        $this->NegaraAsalTeam = $NegaraAsalTeam;
        $this->TahunBerdiriTeam = $TahunBerdiriTeam;
        $this->Pemain = $Pemain;
        $this->NegaraAsalPemain = $NegaraAsalPemain;
        $this->NomorPunggungPemain = $NomorPunggungPemain;
        $this->PosisiPemain = $PosisiPemain;
    }

    public function setNamaTeam($NamaTeam){
        $this->NamaTeam = $NamaTeam;
    }

    public function getNamaTeam(){
        return $this->NamaTeam;
    }

    public function setNegaraAsalTeam($NegaraAsalTeam){
        $this->NegaraAsalTeam = $NegaraAsalTeam;
    }

    public function getNegaraAsalTeam(){
        return $this->NegaraAsalTeam;
    }

    public function setTahunBerdiriTeam($TahunBerdiriTeam){
        $this->TahunBerdiriTeam = $TahunBerdiriTeam;
    }

    public function getTahunBerdiriTeam(){
        return $this->TahunBerdiriTeam;
    }

    public function setPemain($Pemain){
        $this->Pemain = $Pemain;
    }

    public function getPemain(){
        return $this->Pemain;
    }

    public function setNegaraAsalPemain($NegaraAsalPemain){
        $this->NegaraAsalPemain = $NegaraAsalPemain;
    }

    public function getNegaraAsalPemain(){
        return $this->NegaraAsalPemain;
    }

    public function setNomorPunggungPemain($NomorPunggungPemain){
        $this->NomorPunggungPemain = $NomorPunggungPemain;
    }

    public function getNomorPunggungPemain(){
        return $this->NomorPunggungPemain;
    }

    public function setPosisiPemain($PosisiPemain){
        $this->PosisiPemain = $PosisiPemain;
    }

    public function getPosisiPemain(){
        return $this->PosisiPemain;
    }
}

?>