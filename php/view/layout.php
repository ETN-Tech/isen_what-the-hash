<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/main-media.css">
    <title><?php echo $meta_title; ?></title>
</head>

<body>
<header class="navbar navbar-expand-md fixed-top navbar-dark flex-lg-row bd-navbar bg-primary">
    <a class="navbar-brand mr-0 mr-md-2" href="/">
        <svg class="bi" width="32" height="32" fill="currentColor">
            <use xlink:href="/icons/bootstrap-icons.svg#lock"/>
        </svg>
        <div>
            <span class="brand-main">WhatTheHash</span>
            <span class="brand-lead">Hash Algorithms Security</span>
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar1">
        <ul class="navbar-nav bd-navbar-nav">
            <li class="nav-item">
                <a href="/home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="/implications" class="nav-link">Implications</a>
            </li>
            <li class="nav-item">
                <a href="/hash-functions" class="nav-link">Hash Algorithms</a>
            </li>
            <li class="nav-item">
                <a href="/attacks" class="nav-link">Attacks</a>
            </li>
            <li class="nav-item">
                <a href="/lab" class="nav-link">Lab</a>
            </li>
        </ul>
    </div>
</header>


<?php echo $content; ?>


<footer class="bd-footer text-muted">
    <div class="container-fluid p-3 p-md-5">
        <ul class="bd-footer-links">
            <li><a href="/home">Home</a></li>
            <li><a href="/about/project">Project</a></li>
            <li><a href="/about">About</a></li>
        </ul>
        <p>Designed and built by <a href="/about/team/">ISEN Students</a> with the help of our teachers.</p>
        <p>More informations about this <a href="/about/project/" target="_blank" rel="noopener">project</a>.</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>

</body>
</html>
