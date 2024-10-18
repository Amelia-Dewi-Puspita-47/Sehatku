<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
    <div class="container">
        <div class="blog-left">
            <div class="namaBlog">
                <h1>Tips Hidup Sehat di Era Digital</h1>
                <p>Ditulis oleh Admin SehatKu | 15 Oktober 2024</p>
            </div>

            <div class="pic-wisata"> 
                <img src="<?= base_url('assets/detail1.jpeg'); ?>" alt="Gambar Utama Artikel">
            </div>

            <div class="content-detailblog">
                <p>Di era digital ini, menjaga kesehatan fisik dan mental menjadi tantangan tersendiri. Artikel ini membahas cara-cara menjaga kesehatan dengan bantuan teknologi yang tersedia di sekitar kita.</p>

                <h2>Manfaat Teknologi untuk Kesehatan</h2>
                <p>Teknologi dapat membantu kita menjaga pola hidup sehat melalui berbagai aplikasi, alat, dan informasi yang mudah diakses. Berikut adalah beberapa cara bagaimana teknologi dapat mendukung kesehatan Anda:</p>

                <ul>
                    <li><strong>Aplikasi Kebugaran:</strong> Aplikasi seperti pelacak kebugaran memungkinkan kita untuk memantau aktivitas fisik, pola makan, dan tidur.</li>
                    <li><strong>Informasi Kesehatan:</strong> Internet menyediakan informasi yang mudah diakses tentang pola makan sehat, olahraga, dan gaya hidup.</li>
                    <li><strong>Telemedicine:</strong> Kini, kita dapat berkonsultasi dengan dokter secara online tanpa harus pergi ke klinik atau rumah sakit.</li>
                </ul>

                <h2>Tips Menjaga Kesehatan Mental</h2>
                <p>Kesehatan mental sama pentingnya dengan kesehatan fisik. Gunakan teknologi untuk melakukan meditasi, mengikuti sesi terapi online, atau membaca artikel dan buku untuk meningkatkan kesehatan mental.</p>
            </div>

            <div class="share-buttons">
                <p>Bagikan Artikel:</p>
                <a href="https://www.facebook.com/sharer/sharer.php?u=link" target="_blank">Facebook</a>
                <a href="https://twitter.com/intent/tweet?text=link" target="_blank">Twitter</a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=link" target="_blank">LinkedIn</a>
            </div>
        </div>

        <div class="blog-right">
            <h3>Artikel Terkait</h3>
            <div class="related-articles">
                <a href="#" class="related-article"> 
                    <img src="<?= base_url('assets/artikel2.jpg'); ?>" alt="Artikel Terkait 1">
                    <h4>Manfaat Olahraga Rutin untuk Kesehatan</h4>
                </a>
                <a href="#" class="related-article">
                    <img src="<?= base_url('assets/artikel1.jpg'); ?>" alt="Artikel Terkait 2">
                    <h4>Pentingnya Pola Makan Sehat</h4>
                </a>
                <a href="#" class="related-article">
                    <img src="<?= base_url('assets/artikel3.jpg'); ?>" alt="Artikel Terkait 3">
                    <h4>Tips Menjaga Kesehatan Mental di Tengah Kesibukan</h4>
                </a>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>