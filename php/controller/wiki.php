<?php

// get wiki page details
$page = get_page($params['page']);

$meta_title = $page['meta_title'];


// get page content
$articles = get_articles($page['id']);


require_once ('../php/view/wiki.view.php');
