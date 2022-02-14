#include <iostream>
#include <string>
using namespace std;
class TimSepakbola{
    private:

        string NamaTeam, NegaraAsalTeam, Pemain, NegaraAsalPemain, PosisiPemain;
        int TahunBerdiriTeam, NomorPunggungPemain;
        
    public:

        TimSepakbola(){
            string NamaTeam = "";
            string NegaraAsalTeam = "";
            int TahunBerdiriTeam = 0;
            string pemain = "";
            string NegaraAsalPemain = "";
            int NomorPunggungPemain = 0;
            string PosisiPemain = "";
        }
        
        TimSepakbola(string NamaTeam, string NegaraAsalTeam, int TahunBerdiriTeam, string Pemain, string NegaraAsalPemain, int NomorPunggunPemain, string PosisiPemain){
            this->NamaTeam = NamaTeam;
            this->NegaraAsalTeam = NegaraAsalTeam;
            this->TahunBerdiriTeam = TahunBerdiriTeam;
            this->Pemain = Pemain;
            this->NegaraAsalPemain = NegaraAsalPemain;
            this->NomorPunggungPemain = NomorPunggungPemain;
            this->PosisiPemain = PosisiPemain;
        }

        void setNamaTeam(string NamaTeam){
            this->NamaTeam = NamaTeam;
        }

        string getNamaTeam(){
            return this->NamaTeam;
        }

        void setNegaraAsalTeam(string NegaraAsalTeam){
            this->NegaraAsalTeam = NegaraAsalTeam;
        }

        string getNegaraAsalTeam(){
            return this->NegaraAsalTeam;
        }

        void setTahunBerdiriTeam(int TahunBerdiriTeam){
            this->TahunBerdiriTeam = TahunBerdiriTeam;
        }

        int getTahunBerdiriTeam(){
            return this->TahunBerdiriTeam;
        }

        void setPemain(string Pemain){
            this->Pemain = Pemain;
        }

        string getPemain(){
            return this->Pemain;
        }

        void setNegaraAsalPemain(string NegaraAsalPemain){
            this->NegaraAsalPemain = NegaraAsalPemain;
        }

        string getNegaraAsalPemain(){
            return this->NegaraAsalPemain;
        }

        void setNomorPunggungPemain(int NomorPunggungPemain){
            this->NomorPunggungPemain = NomorPunggungPemain;
        }

        int getNomorPunggungPemain(){
            return this->NomorPunggungPemain;
        }

        void setPosisiPemain(string PosisiPemain){
            this->PosisiPemain = PosisiPemain;
        }

        string getPosisiPemain(){
            return this->PosisiPemain;
        }

        ~TimSepakbola(){}
};