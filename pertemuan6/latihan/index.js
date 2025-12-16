// File: index.js

// Impor modul kasir yang kita buat tadi
const kasir = require('./kasir');

// Jalankan programnya
const tagihan = kasir.hitungTotal(2, 3); // Beli 2 buku, 3 pensil
kasir.cetakStruk(tagihan);
