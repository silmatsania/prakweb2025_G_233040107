// File: kasir.js

const namaToko = "Toko Serba Ada";
const hargaBuku = 5000;
const hargaPensil = 2000;

function hitungTotal(jmlBuku, jmlPensil) {
    return (jmlBuku * hargaBuku) + (jmlPensil * hargaPensil);
}

const cetakStruk = (total) => {
    console.log("=== " + namaToko + " ===");
    console.log("Total Belanja: Rp " + total);
    console.log("Terima Kasih!");
};

// BAGIAN PENTING: Ekspor supaya bisa dipakai file lain
module.exports = {
    hitungTotal,
    cetakStruk
};
