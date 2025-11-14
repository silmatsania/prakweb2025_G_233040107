<?php

class Rumah {
    public $warna;
    public $lokasi;

    public function __construct($warnaRumah, $alamatRumah)
    {
        $this->warna  = $warnaRumah;
        $this->lokasi = $alamatRumah;
    }
}

function pasangListrik(Rumah $obj)
{
    return "Sedang memasang listrik di rumah warna " . $obj->warna .
           " berlokasi di " . $obj->lokasi;
}

$rumahUtama = new Rumah("Hijau", "Jl. Kenanga No. 12");

echo pasangListrik($rumahUtama);
echo "<br>";

$hanyaTeks = "Ini hanya string";

// jangan dipanggil agar tidak error
// echo pasangListrik($hanyaTeks);

?>
