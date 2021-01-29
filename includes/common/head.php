<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <meta name="referrer" content="origin-when-cross-origin">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="msapplication-tap-highlight" content="no">
    <title>art.</title>
    <link rel="stylesheet" href="<?= $domain ?>/assets/css/style.css">
</head>
<body>
<?php if (!defined('MAINTENANCE')) { ?>
<header>
    <div id="burger-container">
        <p>art.</p>
        <div id="burger">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </div>
    </div>
    <nav>
        <div class="logo-nav">
            <p>art.</p>
        </div>
        <ul>
            <li class="<?= ($uri == '/') ? 'active' : '' ?>">
                <a href="<?= $domain ?>/">Accueil</a>
            </li>
            <li class="<?= ($uri == '/toiles') ? 'active' : '' ?>">
                <a href="<?= $domain ?>/toiles">Toiles</a>
            </li>
            <li class="<?= ($uri == '/peintres') ? 'active' : '' ?>">
                <a href="<?= $domain ?>/peintres">Peintres</a>
            </li>
            <li class="<?= ($segments[1] == 'blog') ? 'active' : '' ?>">
                <a href="<?= $domain ?>/blog">Blog</a>
            </li>
            <li class="<?= ($uri == '/contact') ? 'active' : '' ?>">
                <a href="<?= $domain ?>/contact">Contact</a>
            </li>
        </ul>
    </nav>
</header>
<?php } ?>
<main>
