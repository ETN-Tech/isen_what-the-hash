<?php

// get wiki page details
$page = get_page($params['name']);


// get article details
$article = get_article($params['name']);

$meta_title = $article['meta_title'];


require_once ('../php/view/wiki-article.view.php');
