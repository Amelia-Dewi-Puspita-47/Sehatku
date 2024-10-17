<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title; ?> </title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<!-- kalo ngaksesnya lewat xampp, bukan lewat local development server : 'php spark serve', maka kalian harus tambahkan baseuRL -->
<!-- <li><a href="<?= base_url('/'); ?>" class="active">Home</a></li>
<li><a href="<?= base_url('/pages/about'); ?>" class="active">About</a></li> -->

                

<body>
    <header>
        <nav>
            <ul>
                <li class="brand-text">HealthyLife</li>
                <li><a href="/" class="active">Home</a></li>
                <li><a href="Gaya.html">Gaya Hidup</a></li>
                <li><a href="Diet.html">Diet</a></li>
                <li><a href="Olahraga.html">Olahraga</a></li>
                <li><a href="Tidur.html">Tidur Sehat</a></li>
                <li><a href="Stres.html">Manajemen Stres</a></li>
                <li><a href="hidrasi.html">Hidrasi</a></li>
                <li><a href="Makanan.html">Makanan Sehat</a></li>
                <li><a href="/pages/about">Tentang</a></li>
                <li><a href="Contact.html">Kontak</a></li>
            </ul>
        </nav>
    </header>