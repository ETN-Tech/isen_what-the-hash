<?php

function format_date($date) {
    $time = strtotime($date);

    return ucfirst(strftime('%A %e %B %Y', $time))." - ".strftime('%Hh%M', $time);
}

// test if user is connected, otherwise redirect
function restrict_admin() {
    if (!isset($_SESSION['id'])) {
        header('Location: /admin/login');
        die();
    }
}

// execute command background
function exec_background($command) {
    // generate filename
    $file_name = round(microtime(true) * 1000) .'.txt';

    // add background params to command
    $command .= " > ". $file_name .' &';
    // execute command
    passthru(escapeshellcmd($command));

    return false;// TODO get result text.file ;
}

// replace all characters not letters or numbers with $replace
function str_only_letters_numbers($str, $replace = '') {
    $str = strtolower(trim($str));
    return preg_replace('~[^\\pL0-9_]+~u', $replace, $str);
}

// remove accents
function no_special_chars($text) {
    $utf8 = array(
        '/[áàâãªä]/u' => 'a',
        '/[ÁÀÂÃÄ]/u' => 'A',
        '/[ÍÌÎÏ]/u' => 'I',
        '/[íìîï]/u' => 'i',
        '/[éèêë]/u' => 'e',
        '/[ÉÈÊË]/u' => 'E',
        '/[óòôõºö]/u' => 'o',
        '/[ÓÒÔÕÖ]/u' => 'O',
        '/[úùûü]/u' => 'u',
        '/[ÚÙÛÜ]/u' => 'U',
        '/ç/' => 'c',
        '/Ç/' => 'C',
        '/ñ/' => 'n',
        '/Ñ/' => 'N',
    );
    return preg_replace(array_keys($utf8), array_values($utf8), $text);
}
