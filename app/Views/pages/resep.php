<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<section class="recipes-section">
    <h1>Resep Sehat</h1>

    <!-- Filter by Diet Type -->
    <div class="filter-diet">
        <label for="diet-type">Filter by Diet Type: </label>
        <select id="diet-type">
            <option value="all">All</option>
            <option value="vegetarian">Vegetarian</option>
            <option value="vegan">Vegan</option>
            <option value="keto">Keto</option>
        </select>
    </div>

    <!-- Recipe List -->
    <div class="recipe-list">
        <div class="recipe-card">
            <img src="<?= base_url('assets/resep1.jpg'); ?>" alt="Recipe 1">
            <div class="recipe-info">
                <h2>Vegetarian Salad</h2>
                <p>Bahan: Sayuran segar, Minyak zaitun, Garam, Lemon</p>
                <p>Cara memasak: Campur semua bahan dalam mangkuk besar...</p>
            </div>
        </div>

        <div class="recipe-card">
            <img src="<?= base_url('assets/resep2.jpg'); ?>" alt="Recipe 2">
            <div class="recipe-info">
                <h2>Keto Chicken</h2>
                <p>Bahan: Ayam, Minyak zaitun, Rempah-rempah</p>
                <p>Cara memasak: Masak ayam di atas api sedang hingga matang...</p>
            </div>
        </div>
    </div>

    <div class="cta-section">
        <p>Bagikan Resep Favorit Anda</p>
        <a href="#" class="btn">Bagikan Resep</a>
    </div>
</section>
<?= $this->endSection(); ?>