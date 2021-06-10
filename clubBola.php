<?php 

//class
class TeamSepakBola {
    private     $namaTeam,
                $pelatih,
                $jumlahPemain,
                $kelahiranTeam,
                $asalTeam;

    public function __construct($namaTeam = "nama team", $pelatih = "pelatih", $jumlahPemain = 0, $kelahiranTeam = 0, $asalTeam = "asal team"){
        $this->namaTeam = $namaTeam;
        $this->pelatih = $pelatih;
        $this->jumlahPemain = $jumlahPemain;
        $this->kelahiranTeam = $kelahiranTeam;
        $this->asalTeam = $asalTeam;
    }
    public function setNamaTeam($namaTeam){
        if (!is_string($namaTeam)){
            throw new Exception("Harap mengisi A - Z");
        }
        $this->namaTeam = $namaTeam;
    }
    public function getNamaTeam(){
        return $this->namaTeam;
    }

    public function setPelatih($pelatih){
        if (!is_string($pelatih)){
            throw new Exception("Harap mengisi A - Z");
        }
        $this->pelatih = $pelatih;
    }
    public function getPelatih(){
        return $this->pelatih;
    }

    public function setJumlahPemain($jumlahPemain){
        $this->jumlahPemain = $jumlahPemain;
    }

    public function setKelahiranTeam($kelahiranTeam){
        $this->kelahiranTeam = $kelahiranTeam;
    }
    public function getKelahiranTeam(){
        return $this->kelahiranTeam;
    }

    public function tampilTeam(){
        return "{$this->namaTeam}, Tahun Kelahiran : {$this->kelahiranTeam}";
    }

    public function infoLengkap (){
        $str = "{$this->tipe} : {$this->tampilTeam()}";
        return $str;
    }


}

//child class club 
class Club extends TeamSepakBola {
    protected $trofiUCL;
    public function __construct($namaTeam = "nama team", $pelatih = "pelatih", $jumlahPemain = 0, $kelahiranTeam = 0, $asalTeam = "asal team", $trofiUCL = 0){
        //overriding
        parent::__construct($namaTeam, $pelatih , $jumlahPemain, $kelahiranTeam, $asalTeam);
        $this->trofiUCL = $trofiUCL;
    }
    public function tampilTeam(){
        //overriding
        $str = "<b>Club Team</b> : " . parent::tampilTeam() . " - Trofi yang diperoleh : {$this->trofiUCL} Piada Champion";
        return $str;
    }
}

//child class national team
class NationalTeam extends TeamSepakBola {
    protected $trofiPildun;
    public function __construct($namaTeam = "nama team", $pelatih = "pelatih", $jumlahPemain = 0, $kelahiranTeam = 0, $asalTeam = "asal team", $trofiPildun){
        //overriding
        parent::__construct($namaTeam, $pelatih, $jumlahPemain, $kelahiranTeam, $asalTeam);
        $this->trofiPildun = $trofiPildun;
    }
    public function tampilTeam(){
        //overriding
        $str = "<b>National Team</b> : " . parent::tampilTeam() . " - Trofi yang diperoleh : {$this->trofiPildun} Piala Dunia";
        return $str;
    }
}

class informasiTeam {
    public function informasi(TeamSepakBola $club){
        $str = $club->tampilTeam();
        return $str;
    }
}


$club1 = new Club("Manchester United", "Ole", 39, 1990, "Inggris", 10);
$club2 = new NationalTeam("Francis", "simonceli", 20, 1879, "Francis", 5);

echo $club1->tampilTeam();
echo "<br>";
echo $club2->tampilTeam();
// $club1->setNamaTeam("mujib");
// echo "<br>";

// echo $club1->getNamaTeam();
// echo $club2->getNamaTeam();


// echo $club1->getPelatih();
// echo $club2->getPelatih();

// echo $club1->tampilTeam();
// echo $club2->tampilTeam();

// echo$club1->getKelahiranTeam();
// echo$club2->getKelahiranTeam();

?>