<?php 


class Hitung{

    private $tujuan;
    private $jumtik;
    private $dis;
    public $hargaTiket;

    public function __construct($tujuan, $jumtik,){
        $this->tujuan = $tujuan;
        $this->jumtik = $jumtik;
    }  

    public function harga(){
        if ($this->tujuan == "Jakarta") {
            $this->hargaTiket = 100000;
        } elseif ($this->tujuan == "Tasikmalaya") {
            $this->hargaTiket = 60000;
        } elseif ($this->tujuan == "Garut") {
            $this->hargaTiket = 70000;
        } elseif ($this->tujuan == "Tangerang") {
            $this->hargaTiket = 110000;
        } else {
            echo "Tujuan Tidak Ditemukan";
        }
        
        echo "Harga Tiket : Rp. $this->hargaTiket";
        
    }

    public function diskon(){
        if ($this->jumtik > 10) {
            $this->dis = 20;
        } elseif ($this->jumtik > 5) {
            $this->dis = 15;
        } else {
            $this->dis = 10;
        }

        echo "Diskon : ". $this->dis ."%";
    }

    public function total(){
        if ($this->tujuan == "Jakarta") {
            $this->harga = $this->jumtik * $this->hargaTiket * (1 - $this->dis / 100);
        } elseif ($this->tujuan == "Tasikmalaya") {
            $this->harga = $this->jumtik * $this->hargaTiket * (1 - $this->dis / 100);
        } elseif ($this->tujuan == "Garut") {
            $this->harga = $this->jumtik * $this->hargaTiket * (1 - $this->dis / 100);
        } elseif ($this->tujuan == "Tangerang") {
            $this->harga = $this->jumtik * $this->hargaTiket * (1 - $this->dis / 100);
        } else {
            echo "Tujuan Tidak Ditemukan";
        }

        echo "Harga Tiket Setelah Diskon : Rp. $this->harga";
    }
}

$hasil = new Hitung($_GET['tujuan'], $_GET['jumtik']);

echo "Tujuan : ". $_GET['tujuan'] ."<br>";
$hasil->harga();
echo "<br>";
echo "Jumlah Tiket : ". $_GET['jumtik'] ."<br>";
$hasil->diskon();
echo "<br>";
echo "Total Harga : Rp. ". $_GET['jumtik'] * $hasil->hargaTiket;
echo "<br>";
$hasil->total();
echo "<br>";
echo "<br>";
echo "<a href='form2.php'>Kembali</a>"
?>