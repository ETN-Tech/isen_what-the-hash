<?php

// get wiki page details
$page = get_wiki_page($params['page']);


// get article details
$article = get_wiki_article($params['name']);

$meta_title = $article['meta_title'];


require_once ('../php/view/wiki-article.view.php');
