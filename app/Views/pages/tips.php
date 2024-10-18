<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Tips Sehat Section -->
<section class="tips">
    <div class="container-tips">
        <h1>Kumpulan Tips Harian</h1>
        <p>Temukan tips harian yang mudah diterapkan untuk hidup lebih sehat.</p>

        <div class="tips-grid">
            <div class="tip-card">
                <i class='bx bx-check-circle'></i>
                <h3>Minum Air yang Cukup</h3>
                <p>Pastikan untuk minum setidaknya 8 gelas air setiap hari untuk menjaga hidrasi tubuh.</p>
            </div>
            <div class="tip-card">
                <i class='bx bx-run'></i>
                <h3>Olahraga Rutin</h3>
                <p>Lakukan aktivitas fisik minimal 30 menit setiap hari untuk menjaga kesehatan jantung.</p>
            </div>
            <div class="tip-card">
                <i class='bx bx-bowl-rice'></i>
                <h3>Pola Makan Seimbang</h3>
                <p>Konsumsi berbagai jenis makanan sehat, termasuk sayuran dan buah-buahan.</p>
            </div>
            <div class="tip-card">
                <i class='bx bx-bed'></i>
                <h3>Cukup Tidur</h3>
                <p>Usahakan tidur 7-9 jam setiap malam untuk memulihkan energi dan kesehatan mental.</p>
            </div>
            <div class="tip-card">
                <i class='bx bx-smile'></i>
                <h3>Manajemen Stres</h3>
                <p>Luangkan waktu untuk relaksasi dan aktivitas yang menyenangkan untuk mengurangi stres.</p>
            </div>
            <div class="tip-card">
                <i class='bx bx-food-menu'></i>
                <h3>Pilih Makanan Sehat</h3>
                <p>Hindari makanan olahan dan pilih makanan segar yang kaya nutrisi.</p>
            </div>
            <div class="tip-card">
                <i class='bx bx-time'></i>
                <h3>Atur Waktu untuk Diri Sendiri</h3>
                <p>Luangkan waktu setiap hari untuk melakukan aktivitas yang Anda nikmati.</p>
            </div>
        </div>

        <div class="subscribe">
            <h2>Langganan Newsletter</h2>
            <p>Dapatkan tips langsung ke email Anda!</p>
            <form action="#" method="post">
                <input type="email" placeholder="Email Anda" required>
                <button type="submit" class="btn">Langganan</button>
            </form>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>