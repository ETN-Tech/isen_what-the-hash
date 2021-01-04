<?php

$supported_algo = array();
// add other algos natively supported by php
for ($i = 0; $i <= 13; $i++) {
    array_push($supported_algo, hash_algos()[$i]);
}
array_push($supported_algo, 'blake2');

if (isset($_POST['form-hash-functions'])) {
    $algo_name = htmlspecialchars($_POST['algo']);
    $text = htmlspecialchars($_POST['text']);

    // verify if algo is supported
    if (array_search($algo_name, $supported_algo) !== false) {
        if (array_search($algo_name, hash_algos()) !== false) {
            $hash = hash($algo_name, $text);
        } else {
            switch ($algo_name) {
                case 'blake2':
                    $hash = blake2($text);
                    break;
            }
        }
    }
    $output = $algo_name .'('. $text .') = '. $hash;
} else {
    $output = '<i>Waiting for script execution...</i>';
}
