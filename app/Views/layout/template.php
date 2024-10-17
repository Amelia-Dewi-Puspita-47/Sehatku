<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title; ?> </title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }

        .brand-text {
            font-size: 30px;
            font-weight: bold;

        }

        header,
        footer {
            background: #005f73;
            color: #ffffff;
            padding: 10px 20px;
            text-align: center;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            color: #ffffff;
            text-decoration: none;
        }

        .active {
            text-decoration: underline;
        }

        main {
            padding: 30px;
            text-align: center;
        }
    </style>
</head>

<!-- kalo ngaksesnya lewat xampp, bukan lewat local development server : 'php spark serve', maka kalian harus tambahkan baseuRL -->
<!-- <li><a href="<?= base_url('/'); ?>" class="active">Home</a></li>
<li><a href="<?= base_url('/pages/about'); ?>" class="active">About</a></li> -->



<body>
    <header>
        <?= $this->include('layout/navbar'); ?>
    </header>

    <?= $this->renderSection('content'); ?>

    <footer>
        <p>&copy; 2024 HealthyLife. All rights reserved.</p>
    </footer>
</body>

</html>