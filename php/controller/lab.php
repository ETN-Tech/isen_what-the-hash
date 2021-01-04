<?php

$meta_title = 'Lab';

// get page content
$labs = get_labs();

$page = get_page('lab');

require_once('../php/view/lab.view.php');
