#include <bits/stdc++.h>
#include "TimSepakbola.cpp"

using namespace std;

void line(){
    for(int i=0; i<25; i++){
        cout << "=";
    }
    cout << endl;
}

int main(){
    TimSepakbola Team_A;
    Team_A.setNamaTeam("Paris Saint-Germain");
    Team_A.setNegaraAsalTeam("France");
    Team_A.setTahunBerdiriTeam(1970);
    Team_A.setPemain("Lionel Messi");
    Team_A.setNegaraAsalPemain("Argentina");
    Team_A.setNomorPunggungPemain(30);
    Team_A.setPosisiPemain("FW");

    TimSepakbola Team_B;
    Team_B.setPemain("Sergio Ramos");
    Team_B.setNegaraAsalPemain("Spanyol");
    Team_B.setNomorPunggungPemain(4);
    Team_B.setPosisiPemain("DF");

    cout << endl;
    cout << ">>> " << Team_A.getNamaTeam() << " <<<" << endl;
    cout << endl;
    cout << "Tahun Berdiri Team : " << Team_A.getTahunBerdiriTeam() << endl;
    cout << "Asal Negara Team : " << Team_A.getNegaraAsalTeam() << endl;
    cout << "Daftar Pemain : " << endl;
    cout << endl;
    line();
    cout << "1. "<< Team_A.getPemain() << endl;
    line();
    cout << "Kebangsaan : " << Team_A.getNegaraAsalPemain() << endl;
    cout << "Nomor Punggung : " << Team_A.getNomorPunggungPemain() << endl;
    cout << "Posisi : "<< Team_A.getPosisiPemain() << endl;
    line();
    cout << endl;
    line();
    cout << "1. "<< Team_B.getPemain() << endl;
    line();
    cout << "Kebangsaan : " << Team_B.getNegaraAsalPemain() << endl;
    cout << "Nomor Punggung : " << Team_B.getNomorPunggungPemain() << endl;
    cout << "Posisi : "<< Team_B.getPosisiPemain() << endl;
    line();

    return 0;
}