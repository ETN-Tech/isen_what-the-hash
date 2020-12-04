<?php

// get wiki page details
$page = get_wiki_page($params['page']);

$meta_title = $page['meta_title'];


// get page content
$leads = get_wiki_leads($page['id']);

$articles = get_wiki_articles($page['id']);


require_once ('../php/view/wiki.view.php');
