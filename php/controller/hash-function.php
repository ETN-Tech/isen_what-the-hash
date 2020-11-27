<?php

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('Location: /hash-functions');
    die();
}

$hf_id = htmlspecialchars($_GET['id']);

$hash_function = get_hash_function($hf_id);

$meta_title = "Hash function MD5";


require_once ('../php/view/hash-function.php');
