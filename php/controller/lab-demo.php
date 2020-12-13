<?php

// get lab details
$lab = get_lab($params['page']);

if ($lab === false) {
    header('Location: /lab');
    die();
}

$meta_title = 'Lab '.$lab['meta_title'];

// Include lab
include ('../php/lab/'. $lab['name'] .'.php');


require_once('../php/view/lab-demo.view.php');
