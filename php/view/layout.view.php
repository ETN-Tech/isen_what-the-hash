<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/main-media.css">
    <title><?= $meta_title; ?></title>
</head>

<body>
<header class="navbar navbar-expand-md fixed-top navbar-dark flex-lg-row bd-navbar bg-info">
    <a class="navbar-brand mr-0 mr-md-2" href="/">
        <svg class="bi" width="32" height="32" fill="currentColor">
            <use xlink:href="/icons/bootstrap-icons.svg#lock"/>
        </svg>
        <div>
            <span class="brand-main">WhatTheHash</span>
            <span class="brand-lead">Hash Algorithms Security</span>
        </div>
    </a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="bdNavbar">
        <ul class="navbar-nav flex-row flex-wrap bd-navbar-nav pt-2 py-md-0">
            <li class="nav-item col-6 col-md-auto">
                <a href="/home" class="nav-link">Home</a>
            </li>
            <?php  foreach ($pages as $page) { ?>
                <li class="nav-item">
                    <a href="<?= $page['url'] ?>" class="nav-link"><?= $page['meta_title'] ?></a>
                </li>
            <?php  } ?>
        </ul>
    </div>
</header>


<?= $content; ?>


<footer class="bd-footer text-muted">
    <div class="container-fluid p-3 p-md-5">
        <ul class="bd-footer-links">
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/admin">Admin</a></li>
        </ul>
        <p>Designed and built by <a href="/about/team/">ISEN Students</a> with the help of our teachers.</p>
        <p>More informations about this <a href="/about/project/" target="_blank" rel="noopener">project</a>.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

</body>
</html>
