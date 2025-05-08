var hari = "Rabu";

switch (hari) {
  case "Senin":
    console.log("Hari ini kamu harus semangat kerja!");
    break;
  case "Selasa":
    console.log("Hari ini waktunya rapat mingguan.");
    break;
  case "Rabu":
    console.log("Hari ini jadwal olahraga kantor.");
    break;
  case "Kamis":
    console.log("Hari ini kamu bisa kerja lebih santai.");
    break;
  case "Jumat":
    console.log("Hari ini adalah hari pendek.");
    break;
  case "Sabtu":
  case "Minggu":
    console.log("Selamat berlibur!");
    break;
  default:
    console.log("Hari tidak dikenali.");
    break;
}
