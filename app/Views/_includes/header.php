<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MNASATI</title>
    <link rel="stylesheet" href="<?= base_url('css/header.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/product.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/marketplace.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.18/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
<header>
    <div class="header-container">
        <div class="logo">
            <img src="https://front.mnasaticdn.com/front-manasti/assets/img_mnasati/icon/site_logo_en_ls.png" alt="Logo">
            <!-- <h1>Dynamic Logo</h1> -->
        </div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/marketplace">Products</a></li>
                <?php if (session()->get('isLoggedIn')) : ?>
                    <li><a href="#">Welcome, <?= session()->get('name') ?></a></li>
                    <li><a href="/logout">Logout</a></li>
                <?php else : ?>
                    <li><a href="/login">Login</a></li>
                <?php endif; ?>
                <li><a href="#">Cart <i class="fa fa-shopping-cart" data-bs-toggle="tooltip" data-bs-placement="bottom" title="View Cart"></i></a></li>
            </ul>
        </nav>
    </div>
</header>
