/* =========================================
   1. VOLUME KUBUS (Function)
   ========================================= */
{
    function volumeDuaKubus(a, b) {
        return (a * a * a) + (b * b * b);
    }

    const v1 = volumeDuaKubus(8, 3);
    const v2 = volumeDuaKubus(10, 15);

    document.getElementById('volume-result').innerHTML = `
    <div class="data-row">
        <span class="data-label">Volume (8, 3)</span>
        <span class="data-value">${v1}</span>
    </div>
    <div class="data-row">
        <span class="data-label">Volume (10, 15)</span>
        <span class="data-value">${v2}</span>
    </div>
`;
}


/* =========================================
   2. ARRAY ANGKOT
   ========================================= */
{
    function tambahPenumpang(nama, arrPenumpang) {
        if (arrPenumpang.length == 0) {
            arrPenumpang.push(nama);
            return arrPenumpang;
        }
        for (let i = 0; i < arrPenumpang.length; i++) {
            if (arrPenumpang[i] == undefined) {
                arrPenumpang[i] = nama;
                return arrPenumpang;
            }
            if (arrPenumpang[i] == nama) {
                console.log(nama + " sudah ada.");
                return arrPenumpang;
            }
        }
        arrPenumpang.push(nama);
        return arrPenumpang;
    }

    let penumpang = [];
    penumpang = tambahPenumpang("Natha", penumpang);
    penumpang = tambahPenumpang("Louren", penumpang);
    penumpang = tambahPenumpang("Bens", penumpang);

    document.getElementById('array-result').innerHTML = `
    <div class="data-row">
        <span class="data-label">Penumpang Akhir</span>
        <span class="data-value">[ "${penumpang.join('", "')}" ]</span>
    </div>
`;
}


/* =========================================
   3. DOM MANIPULATION
   ========================================= */
{
    const btnWarna = document.getElementById('btn-ubah-color');
    const btnText = document.getElementById('btn-ubah-text');
    const p = document.getElementById('dom-p');
    const judul = document.getElementById('dom-judul');

    btnWarna.onclick = function () {
        p.style.backgroundColor = 'rgba(239, 68, 68, 0.2)';
        p.style.color = '#f87171';
        p.style.border = '1px solid #ef4444';
    };

    btnText.addEventListener('click', function () {
        judul.innerHTML = 'Mantap (Updated via EventListener)';
        judul.style.color = '#10b981';
    });
}


/* =========================================
   4. ARROW FUNCTION
   ========================================= */
{
    const tampilNama = nama => `Halo ${nama}`;

    document.getElementById('arrow-result').innerHTML = `
    <div class="data-row">
        <span class="data-label">Result</span>
        <span class="data-value">${tampilNama('Budi')}</span>
    </div>
`;
}


/* =========================================
   5. FILTER
   ========================================= */
{
    const angka = [-2, -2, 6, -8, 5, 2, 8, -10];
    const filtered = angka.filter(a => a >= 0);

    document.getElementById('filter-result').innerHTML = `
    <div class="data-row">
        <span class="data-label">Original</span>
        <span class="data-value">[${angka}]</span>
    </div>
    <div class="data-row">
        <span class="data-label">Filtered (>=0)</span>
        <span class="data-value">[${filtered}]</span>
    </div>
`;
}


/* =========================================
   6. MAP
   ========================================= */
{
    const angka = [-2, -2, 6, -8, 5, 2, 8, -10];
    const mapped = angka.map(a => a * 2);

    document.getElementById('map-result').innerHTML = `
    <div class="data-row">
        <span class="data-label">Original</span>
        <span class="data-value">[${angka}]</span>
    </div>
    <div class="data-row">
        <span class="data-label">Map (*2)</span>
        <span class="data-value">[${mapped}]</span>
    </div>
`;
}


/* =========================================
   7. REDUCE
   ========================================= */
{
    const angka = [-2, -2, 6, -8, 5, 2, 8, -10];
    const total = angka.reduce((acc, curr) => acc + curr, 0);

    document.getElementById('reduce-result').innerHTML = `
    <div class="data-row">
        <span class="data-label">Original</span>
        <span class="data-value">[${angka}]</span>
    </div>
    <div class="data-row">
        <span class="data-label">Sum Total</span>
        <span class="data-value">${total}</span>
    </div>
`;
}


/* =========================================
   8. DESTRUCTURING
   ========================================= */
{
    const kelas = ['A', 'B', 'C'];
    const [senin, rabu, kamis] = kelas;

    const mhs = { nama: 'Budi', umur: 20 };
    const { nama, umur } = mhs;
    const { nama: n, umur: u } = mhs;

    document.getElementById('destructuring-result').innerHTML = `
    <div class="data-row">
        <span class="data-label">Array [1] (Rabu)</span>
        <span class="data-value">${rabu}</span>
    </div>
    <div class="data-row">
        <span class="data-label">Object (Nama)</span>
        <span class="data-value">${nama}</span>
    </div>
    <div class="data-row">
        <span class="data-label">Alias (u / Umur)</span>
        <span class="data-value">${u}</span>
    </div>
`;
}
