//Contoh Penggunaan Fungsi
<div class="dita1"></div>

function kalikanAngka(angka1, angka2) {
    console.log("Proses Perhitungan " + angka1 + "dan" + angka2 + ":" );
    return angka1 * angka2;
}

console.log(kalikanAngka(6, 474));

document.getElementById("data1").innerHTML = kalikanAngka(5, 10);
