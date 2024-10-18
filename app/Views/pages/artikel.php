<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
            <div class="container">
                <div class="container1">
                    <div class="blog">
                        <h2>Apa yang terbaru hari ini?</h2> <!-- Sub-judul artikel -->
                    </div>
                    <div class="row-artikel">
                        <div class="filter-category">
                            <label for="category">Filter berdasarkan kategori:</label>
                            <select id="category">
                                <option value="nutrisi">Nutrisi</option>
                                <option value="olahraga">Olahraga</option>
                                <option value="kesehatan">Kesehatan Mental</option>
                                <option value="mental">Kebiasaan Sehat</option>
                            </select>
                        </div>

                        <div class="search-bar">
                            <input type="text" placeholder="Cari artikel..." />
                            <button>Cari</button>
                        </div>
                    </div>

                    <div class="blog-card">
                        <div class="img-blog">
                            <img src="<?= base_url('assets/artikel1.jpg'); ?>" alt="Gambar Artikel 1">
                        </div>
                        <div class="content-blog">
                            <h2>Manfaat Makanan Sehat untuk Tubuh</h2>
                            <p>20 Oktober 2024</p>
                            <p>Makanan sehat sangat penting untuk menjaga kesehatan tubuh dan mencegah berbagai penyakit. Dalam artikel ini, kita akan membahas berbagai manfaat makanan sehat.</p>
                            <a href="#" class="read-more">Selengkapnya</a>
                        </div>
                    </div>

                    <div class="blog-card">
                        <div class="img-blog">
                            <img src="<?= base_url('assets/artikel4.jpg'); ?>" alt="Gambar Artikel 2">
                        </div>
                        <div class="content-blog">
                            <h2>Pentingnya Olahraga untuk Kesehatan Mental</h2>
                            <p>18 Oktober 2024</p>
                            <p>Olahraga tidak hanya bermanfaat untuk kesehatan fisik, tetapi juga sangat penting untuk kesehatan mental. Artikel ini akan menjelaskan manfaat olahraga bagi kesehatan mental.</p>
                            <a href="#" class="read-more">Selengkapnya</a>
                        </div>
                    </div>

                    <div class="blog-card">
                        <div class="img-blog">
                            <img src="<?= base_url('assets/detail1.jpeg'); ?>" alt="Gambar Artikel 3">
                        </div>
                        <div class="content-blog">
                            <h2>Tips Hidup Sehat di Era Digital</h2>
                            <p>15 Oktober 2024</p>
                            <p>Dalam era digital ini, penting untuk menjaga kesehatan fisik dan mental. Artikel ini memberikan tips praktis untuk hidup sehat di era digital.</p>
                            <a href="detailartikel.php" class="read-more">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?= $this->endSection(); ?>