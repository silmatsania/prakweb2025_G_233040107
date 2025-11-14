<?php

class Produk {
    public $judul;
    public $penulis;
    public $harga;

    public function __construct($judul, $penulis, $harga)
    {
        $this->judul   = $judul;
        $this->penulis = $penulis;
        $this->harga   = $harga;
    }

    public function info()
    {
        return $this->judul . " | " . $this->penulis . " | Rp " . $this->harga;
    }
}

class Komik extends Produk {
    public $jumlahHalaman;

    public function __construct($judul, $penulis, $harga, $halaman)
    {
        parent::__construct($judul, $penulis, $harga);
        $this->jumlahHalaman = $halaman;
    }

    public function info()
    {
        return $this->judul . " | " . $this->penulis . " | Rp " . $this->harga .
               " | Halaman: " . $this->jumlahHalaman;
    }
}

class Game extends Produk {
    public $lamaMain;

    public function __construct($judul, $penulis, $harga, $durasi)
    {
        parent::__construct($judul, $penulis, $harga);
        $this->lamaMain = $durasi;
    }

    public function info()
    {
        return $this->judul . " | " . $this->penulis . " | Rp " . $this->harga .
               " | Durasi: " . $this->lamaMain . " Jam";
    }
}

$produkA = new Produk("Pulpen Stylus", "Kirana", 12000);

$komikA = new Komik("Petualangan Naga", "Rama Surya", 38000, 95);
$komikB = new Komik("Legenda Samurai", "Dipta", 42000, 110);

$gameA = new Game("Cyber War", "Alvaro", 150000, 6);
$gameB = new Game("Shadow Quest", "Mika", 200000, 12);

echo $produkA->info(); echo "<br>";
echo $komikA->info();  echo "<br>";
echo $komikB->info();  echo "<br>";
echo $gameA->info();   echo "<br>";
echo $gameB->info();

?>
