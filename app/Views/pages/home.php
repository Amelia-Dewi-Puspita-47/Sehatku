<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Hero Section -->
<section class="hero">
    <div class="slider-wrapper">
        <img src="<?= base_url('assets/hero-image.jpg'); ?>" alt="Hero Image 1">
        <img src="assets/hero-image1.PNG" alt="Hero Image 2">
        <img src="assets/hero-image2.jpg" alt="Hero Image 3">
        <img src="assets/hero-image3.jpg" alt="Hero Image 4">
        <img src="assets/hero-image4.jpg" alt="Hero Image 5">
        <img src="assets/hero-image5.jpeg" alt="Hero Image 6">
    </div>
    <div class="hero-content">
        <h1>Hidup Sehat Dimulai dari Sini</h1>
        <p>Temukan tips dan informasi terbaru tentang gaya hidup sehat.</p>
        <div class="cta-buttons">
            <a href="#artikel" class="btn">Ayo Mulai, Baca Artikel Terbaru</a>
        </div>
    </div>
</section>

<!-- Artikel Terbaru Section -->
<section id="artikel" class="latest-articles">
    <div class="container2">
        <h1>Artikel Terbaru</h1>
        <p>Beragam informasi terkini yang dapat meningkatkan kualitas hidup Anda melalui artikel-artikel kesehatan yang menarik.</p>
        <div class="artikel-grid">
            <div class="photo-card">
                <img src="assets/artikel1.jpg" alt="Judul Artikel 1">
                <div class="info">
                    <h2>Judul Artikel 1</h2>
                    <hr>
                    <p>Deskripsi singkat tentang artikel 1.</p>
                    <div class="buttons">
                        <div class="btn-detail">
                            <button class="detail" onclick="window.location.href='detailartikel.php?id=1'">Detail</button> <!-- Tombol untuk melihat detail artikel -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="photo-card">
                <img src="assets/artikel2.jpg" alt="Judul Artikel 2">
                <div class="info">
                    <h2>Judul Artikel 2</h2>
                    <hr>
                    <p>Deskripsi singkat tentang artikel 2.</p>
                    <div class="buttons">
                        <div class="btn-detail">
                            <button class="detail" onclick="window.location.href='detailartikel.php?id=2'">Detail</button> <!-- Tombol untuk melihat detail artikel -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="photo-card">
                <img src="assets/artikel3.png" alt="Judul Artikel 3">
                <div class="info">
                    <h2>Judul Artikel 3</h2>
                    <hr>
                    <p>Deskripsi singkat tentang artikel 3.</p>
                    <div class="buttons">
                        <div class="btn-detail">
                            <button class="detail" onclick="window.location.href='detailartikel.php?id=3'">Detail</button> <!-- Tombol untuk melihat detail artikel -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="btn-selengkapnya">
            <button class="detail">Selengkapnya</button>
        </div>
    </div>
</section>

<!-- Kategori Informasi Section -->
<section class="categories">
    <h2>Kategori Informasi</h2>
    <div class="category-grid">
        <div class="category">
            <i class='bx bx-baguette'></i>
            <h3>Nutrisi</h3>
        </div>
        <div class="category">
            <i class='bx bx-dumbbell'></i>
            <h3>Olahraga</h3>
        </div>
        <div class="category">
            <i class='bx bx-brain'></i>
            <h3>Kesehatan Mental</h3>
        </div>
        <div class="category">
            <i class='bx bx-heart'></i>
            <h3>Kebiasaan Sehat</h3>
        </div>
    </div>
</section>

<!-- Testimoni Section -->
<section class="testimonials">
    <h2>Testimoni</h2>
    <div class="carousel">
        <div class="testimonial">
            <p>"Saya merasa jauh lebih sehat sejak mengikuti tips di SehatKu!"</p>
            <span>- Pengunjung 1</span>
        </div>
        <div class="testimonial">
            <p>"Gaya hidup saya berubah drastis setelah membaca artikel di SehatKu."</p>
            <span>- Pengunjung 2</span>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>