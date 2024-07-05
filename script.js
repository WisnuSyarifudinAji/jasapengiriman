function hitungBiaya() {
    const jarak = parseFloat(document.getElementById('jarak').value);

    if (isNaN(jarak) || jarak <= 0) {
        alert('Jarak pengiriman harus lebih dari 0 km.');
        return;
    }

    const biaya = jarak * 15000;
    document.getElementById('hasilBiaya').innerHTML = `<div class="alert alert-success">Biaya Pengiriman untuk jarak ${jarak} km adalah Rp ${biaya}</div>`;

    // Simpan data ke file transaksi.txt dengan menggunakan AJAX
    simpanTransaksi(jarak, biaya);
}

function simpanTransaksi(jarak, biaya) {
    const xhr = new XMLHttpRequest();
    const url = 'hitung_biaya.php';
    const params = `jarak=${jarak}&biaya=${biaya}`;
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log('Data transaksi berhasil disimpan.');
        }
    };
    xhr.send(params);
}
