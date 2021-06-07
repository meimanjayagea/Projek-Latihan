// Contoh Kondisi If, if else 1
var lampu = "merah";

if(lampu == 'merah')
{
    console.log("Lampu Merah");
}
else if(lampu == 'kuning')
{
    console.log("Lampu Kuning");
}
else if(lampu == 'hijau')
{
    console.log("Lampu Hijau");
}
else
{
    console.log("Lampu Padam");
}


// contoh kondisi switch
let x = 0;
switch(x)
{
    case 0 :
        console.log("Padam");
        break;
    
    case 1:
        console.log("Nyala");
        break;
    
    default:
        console.log("Data Tidak Ada");
        break;
}

// contoh kondisi switch menggunakan DOM
<div class="data2"></div>
let x = 0;
switch(x)
{
    case 0:
        console.log("Padam");
        document.getElementById("data2").innerHTML = "Lampu nyala warna padam";
        break;
    
    case 1:
        console.log("Nyala");
        break;
    
    default:
        console.log("Data Tidak Ada");
        break;
}