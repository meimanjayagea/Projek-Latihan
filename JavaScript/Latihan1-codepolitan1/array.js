//Cara Inisialisasi Array dan Mengakses Data Array (1)
var mobil = ["Avanza", "Agya", "Ayla"];
console.log(mobil[0]); // Output : "Avanza"

var mobil = new Array("Avanza", "Agya", "Ayla");
document.getElementById('divid').innerHTML = mobil[2]; // Output : "Ayla"

//Mengubah Data Array
var mobil = ["Avanza", "Agya", "Ayla"];
mobil[0] = "Fortuner";
console.log(mobil[0]);

//Menghitung Jumlah Array
var mobil = ["Avanza", "Agya", "Ayla", "Fortuner", "BMW", "Kijang"];
console.log(mobil.length);
document.getElementById('divid').innerHTML = "Jumlah Elemen Array Mobil " + mobil.length;

//Mengakses Data Array(2)
var mobil = ["Avanza", "Agya", "Ayla", "Fortuner", "BMW", "Kijang"];
var mobilPertama = mobil[0];
var mobilTerakhir = mobil[mobil.length - 1];
console.log("Mobil Pertama adalah " + mobilPertama);
console.log("Mobil Terakhir adalah " + mobilTerakhir);
document.getElementById('divid').innerHTML = "Mobil Pertama adalah " + mobilPertama;
document.getElementById('dividx').innerHTML = "Mobil Terakhir adalah " + mobilTerakhir;

//Mengubah Array menjadi String (.toString)
var mobil = ["Avanza", "Agya", "Ayla"];
var buah = ["pisang", "pepaya", "rambutan"];
console.log("Saya telah memiliki banyak mobil antara lain " + mobil.toString());
document.getElementById('divid').innerHTML = "Saya suka buah-buahan " + buah.toString();

// Mengubah Array menjadi String(.join)
// Apabila kita ingin mengganti pemisah dari defaultnya koma dengan yang lainnya, kita bisa menggunakan sintaks berikut ini.
var mobil = ["Avanza", "Agya", "Ayla"];
var buah = ["pisang", "pepaya", "rambutan"];
console.log("Saya telah memiliki banyak mobil antara lain " + mobil.join(" * "));
document.getElementById('divid').innerHTML = "Saya suka buah-buahan " + buah.join(" dan ");

// Mengeluarkan data dari Array(.pop)
// mengeluarkan data terakhir dari array dengan menggunakan sintaks
var mobil = ["Avanza", "Agya", "Ayla"];
mobil.pop();
document.getElementById("divid").innerHTML = mobil;

// Memasukkan data ke Array(.push) memasukkan data ke dalam array dengan
var mobil = ["Avanza", "Agya", "Ayla"];
mobil.push("Fortuner");
console.log("Saya telah memiliki banyak mobil antara lain " + mobil.join(" * "));

//Menggabungkan dua Array (.concat) menggabungkan dua array menjadi satu array saja 
var mobilMahal = ["FOrtuner", "Lamborghini"];
var mobilBudget = ["Avanza", "Agya", "Ayla"];
var mobil = mobilBudget.concat(mobilMahal);
document.getElementById("divid").innerHTML = mobil;

//Menggabungkan tiga Array (.concat)
var mobilMahal = ["FOrtuner", "Lamborghini"];
var mobilBudget = ["Avanza", "Agya", "Ayla"];
var motor = ["Verza", "CB 150R", "MegaPro"]
var kendaraanBermotor = mobilBudget.concat(mobilMahal, motor);

//Iterasi Data dari Array dengan For
var teks, i;
teks = "<ul>";
for (i = 0; i < mobil.length; i++) {
    teks += "<li>" + mobil[i] + "</li>";
}
teks += "</ul>";
//Iterasi Data dari Array dengan For
var mobil = ["Avanza", "Agya", "Ayla"];
var teks, i;
teks = "<ul>";
for (i = 0; i < mobil.length; i++) {
    teks += "<li>" + mobil[i] + "</li>";
}
teks += "</ul>";
document.getElementById("divid").innerHTML = teks;

//Iterasi Data dari Array dengan .forEach
var teks, i;
teks = "<ul>";
mobil.forEach(fungsiMobil)
teks += "</ul>";

function fungsiMobil(value) {
    teks += "<li>" + value + "</li>";
}

//Iterasi Data dari Array dengan .forEach
var mobil = ["Avanza", "Agya", "Ayla"];
var teks, i;
teks = "<ul>";
mobil.forEach(fungsiMobil)
teks += "</ul>";

function fungsiMobil(value) {
    teks += "<li>" + value + "</li>";
}
document.getElementById("divid").innerHTML = teks;

// Iterasi menggunakan metode.map
var nomor1 = [4, 9, 16, 25];
var nomor2 = nomor1.map(kaliDua);

function kaliDua(value, index, array) {
    return value * 2;

}
console.log(nomor2);