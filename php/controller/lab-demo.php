<?php

// get lab details
$lab = get_lab($params['page']);

$meta_title = 'Lab '.$lab['meta_title'];

// Include lab
include ('../php/lab/'. $lab['name'] .'.php');


require_once('../php/view/lab-demo.view.php');
