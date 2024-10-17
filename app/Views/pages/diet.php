<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main>
    <h1>Diet Sehat</h1>
    <section>
        <img src="gambar website\Diet.jpg" alt="Gambar Makanan Sehat Bergizi" width="600" height="300">
        <h2>Memilih Makanan Sehat dan Bergizi</h2>
        <p>Tips diet pertama yang harus Anda terapkan adalah memilih makanan yang sehat dan bergizi. Makanan yang dikonsumsi harus mengandung beragam nutrisi, seperti karbohidrat, protein, lemak, serat, serta vitamin dan mineral. Untuk mendapatkan ragam nutrisi tersebut, Anda tidak perlu mengeluarkan banyak biaya sebab banyak bahan makanan bergizi yang murah dan mudah didapatkan.</p>
        <!-- <p>Sumber : https://www.alodokter.com/tips-diet-sehat-melalui-makanan-dan-olahraga</p> -->
    </section>
    <section>
        <img src="gambar website\Pola makan.jpg" alt="Gambar Menjaga Pola Makan" width="600" height="300">
        <h2>Menjaga Pola Makan</h2>
        <p>Tak hanya memilih makanan bergizi, tips diet yang tidak kalah penting adalah menjaga pola makan. Saat diet, pola makan yang disarankan adalah mengonsumsi lebih banyak protein dan serat, serta mengurangi karbohidrat dan lemak. Konsumsi lebih banyak protein diketahui dapat mempercepat pembakaran lemak serta memasok energi tambahan bagi tubuh. Sementara itu, serat bisa membuat tubuh kenyang lebih lama sehingga menekan keinginan untuk makan dengan porsi berlebih. Beberapa hal tersebut akan membantu Anda mencapai berat badan ideal.</p>
        <!-- <p>Sumber : https://www.alodokter.com/tips-diet-sehat-melalui-makanan-dan-olahraga</p> -->
    </section>
    <section>
        <img src="gambar website\Makanan.jpg" alt="Gambar Makanan" width="600" height="300">
        <h2>Menu Diet</h2>
        <h3>1. Sarapan</h3>
        <p>Untuk menu diet sehat di pagi hari, Anda bisa mengisi perut dengan 2 butir telur rebus atau dimasak orak-arik dengan sedikit minyak. Agar sarapan bisa lebih mengenyangkan, kombinasikan telur dengan 2 lembar roti gandum serta 1 cangkir susu rendah lemak. Susu bisa diganti dengan teh atau kopi tanpa susu dan gula.Selain itu, Anda juga bisa sarapan dengan oatmeal yang dicampur dengan beragam buah-buahan, seperti buah naga, alpukat, dan pisang.</p>
        <h3>2. Makan Siang</h3>
        <p>Pada waktu siang, Anda bisa menyantap 1 potong dada ayam yang dipanggang atau ditumis, 1 mangkuk salad atau gado-gado, dan 1 genggam nasi. Kentang rebus atau panggang juga bisa dijadikan sebagai pengganti nasi. Selain itu, menu diet sehat untuk makan siang juga bisa dengan ikan, tumis sayuran, serta tahu dan tempe.</p>
        <h3>3. Makan Malam</h3>
        <p>Saat makan malam, konsumsilah 1 cangkir brokoli yang dikukus atau ditumis, 1 cangkir nasi merah, 1 potong ikan, dan 1 mangkuk salad yang berisi bayam, tomat, serta bawang bombai. Sebagai pilihan lain, Anda juga bisa mengonsumsi beragam jenis buah-buahan atau roti gandum utuh.</p>
        <!-- <p>Sumber : https://www.alodokter.com/contekan-menu-diet-sehat-untuk-santap-pagi-siang-dan-malam-hari</p> -->
    </section>
    <section>
        <h2 class="center-text">Tabel BMI</h2>
        <table>
            <thead>
                <tr>
                    <th>BMI</th>
                    <th>Status Berat Badan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Kurang dari 18.5</td>
                    <td>Kurus</td>
                </tr>
                <tr>
                    <td>18.5-24.9</td>
                    <td>Ideal</td>
                </tr>
                <tr>
                    <td>25.0-29.9</td>
                    <td>Terlalu Berat</td>
                </tr>
                <tr>
                    <td>30 keatas</td>
                    <td>Kegemukan</td>
                </tr>
            </tbody>
        </table>
        <h3 class="center-text">Rumus BMI = Berat Badan (kg) / (Tinggi Badan (m) x Tinggi Badan (m))</h3>
    </section>
    <section>
        <h2 class="bmi-section">Hitung BMI Anda</h2>
        <p class="bmi-section">Hitung Indeks Massa Tubuh (BMI) Anda di sini:</p>
        <form class="bmi-section" id="bmiForm">
            <label for="tinggiBadan">Tinggi Badan (cm):</label>
            <input type="number" id="tinggiBadan" required>
            <label for="beratBadan">Berat Badan (kg):</label>
            <input type="number" id="beratBadan" required>
            <button type="button" onclick="hitungBMI()">Hitung BMI</button>
        </form>
        <p id="hasilBMI"></p>
    </section>
</main>
<?= $this->endSection(); ?>