<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="about-us-section">
    <div class="about-header">
        <h1>Tentang Kami</h1>
        <p>Kami percaya bahwa hidup sehat adalah kunci kebahagiaan.</p>
        <img src="<?= base_url('assets/misi.png'); ?>" alt="Our Mission" class="about-image">
    </div>

    <!-- Visi dan Misi -->
    <div class="mission-vision">
        <h2>Visi dan Misi</h2>
        <p>Visi kami adalah menjadi platform terbaik dalam memberikan informasi yang akurat dan bermanfaat seputar gaya hidup sehat.</p>
        <p>Misi kami adalah mendidik dan menginspirasi masyarakat untuk memilih hidup sehat melalui informasi yang mudah diakses.</p>
    </div>

    <!-- Tim Kami -->
    <div class="team-section">
        <h2>Tim Kami</h2>
        <div class="team-members">
            <div class="team-member">
                <img src="<?= base_url('assets/tim/team1.png'); ?>" alt="Tim Member 1">
                <h3>Amelia Dewi Puspita</h3>
                <!-- <p>Project Manajer</p> -->
            </div>
            <div class="team-member">
                <img src="<?= base_url('assets/tim/team2.png'); ?>" alt="Tim Member 2">
                <h3>Rido Ramadhan</h3>
                <!-- <p>Frontend Developer</p> -->
            </div>
            <div class="team-member">
                <img src="<?= base_url('assets/tim/team3.png'); ?>" alt="Tim Member 3">
                <h3>Nur Indah Sari</h3>
                <!-- <p>F</p> -->
            </div>
            <div class="team-member">
                <img src="<?= base_url('assets/tim/team4.png'); ?>" alt="Tim Member 4">
                <h3>Mutia Ramadhany</h3>
                <!-- <p>F</p> -->
            </div>
        </div>
    </div>

    <!-- Contact Form -->
    <div class="contact-section">
        <h2>Kontak Kami</h2>
        <form action="#" method="post" class="contact-form">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Pesan:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit" class="btn">Kirim Pesan</button>
        </form>
    </div>
</section>
<?= $this->endSection(); ?>