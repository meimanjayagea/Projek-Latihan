//Inisialisasi Object & Property
var Mobil = {
    nama: "Toyota",
    tipe: "Agya",
    berat: 600,
    warna: "putih"
}

//Inisialisasi Method
var Mobil = {
    nama: "Toyota",
    tipe: "Agya",
    berat: 600,
    warna: "putih",
    maju: function () {
        return "Mobil Melaju";
    },
    mundur: function () {
        return "Mobil Mundur";
    }
}

//Mengakses Property dan Method pada Object

var Mobil = {
    nama: "Toyota",
    tipe: "Agya",
    berat: 600,
    warna: "putih",
    maju: function () {
        return "Mulai Melaju";
    },
    mundur: function () {
        return "Mulai Mundur";
    }
}

document.getElementById("data").innerHTML = Mobil.nama + " " + Mobil.maju();