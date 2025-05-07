// Variabel dengan nama sama tetapi berbeda huruf besar/kecil
let nama = "Budi";
let Nama = "Andi";
let NAMA = "Citra";

console.log(nama); // "Budi"
console.log(Nama); // "Andi"
console.log(NAMA); // "Citra"

// Fungsi dengan nama mirip tetapi berbeda case
function sapa() {
  console.log("Halo!");
}

function Sapa() {
  console.log("Hello!");
}

sapa(); // "Halo!"
Sapa(); // "Hello!"

// Properti objek juga case-sensitive
let orang = {
  nama: "Dewi",
  umur: 25,
};

console.log(orang.nama); // "Dewi"
console.log(orang.Nama); // undefined (karena 'Nama' ≠ 'nama')
