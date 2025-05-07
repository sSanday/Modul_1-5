document.addEventListener('DOMContentLoaded', function() {
    const tombol = document.getElementById('tombolSapa');
    const pesan = document.getElementById('pesan');
    
    tombol.addEventListener('click', function() {
        pesan.textContent = 'Halo! Selamat belajar JavaScript External!';
        pesan.style.color = 'blue';
    });
    
    function tampilkanWaktu() {
        const sekarang = new Date();
        console.log('Waktu sekarang: ' + sekarang.toLocaleTimeString());
    }
    
    setInterval(tampilkanWaktu, 5000);
});