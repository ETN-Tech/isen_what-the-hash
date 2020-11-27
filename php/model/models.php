<?php

/* IMPLICATIONS */

function get_implications() {
    global $bdd;

    $get_implications = $bdd->query("SELECT * FROM implications");

    return $get_implications;
}


/* HASH FUNCTIONS */

function get_hash_functions() {
    global $bdd;

    $get_hash_functions = $bdd->query("SELECT * FROM hash_function");

    return $get_hash_functions;
}

function get_hash_function($hf_id) {
    global $bdd;

    $get_hash_function = $bdd->prepare("SELECT * FROM hash_function WHERE id = ?");
    $get_hash_function->execute(array($hf_id));

    return $get_hash_function;
}


/* ATTACKS */

function get_attacks() {
    global $bdd;

    $get_attacks = $bdd->query("SELECT * FROM attack");

    return $get_attacks;
}

function get_attack($attack_id) {
    global $bdd;

    $get_attack = $bdd->prepare("SELECT * FROM attack WHERE id = ?");
    $get_attack->execute(array($attack_id));

    return $get_attack;
}
