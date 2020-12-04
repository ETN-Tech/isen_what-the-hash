<?php

/* WIKI PAGE */

function get_wiki_page($page_name) {
    global $bdd;

    $get_page = $bdd->prepare("SELECT * FROM wiki_page WHERE page = ?");
    $get_page->execute(array($page_name));

    return $get_page->fetch();
}

function get_wiki_leads($page_id) {
    global $bdd;

    $get_lead = $bdd->prepare("SELECT * FROM wiki_lead WHERE page_id = ?");
    $get_lead->execute(array($page_id));

    return $get_lead;
}


/* WIKI ARTICLES  */

function get_wiki_articles ($page_id) {
    global $bdd;

    $get_articles = $bdd->prepare("SELECT * FROM wiki_article WHERE page_id = ?");
    $get_articles->execute(array($page_id));

    return $get_articles;
}

function get_wiki_article ($article_name) {
    global $bdd;

    $get_article = $bdd->prepare("SELECT * FROM wiki_article WHERE name = ?");
    $get_article->execute(array($article_name));

    return $get_article->fetch();
}


/* LABS  */

function get_labs() {
    global $bdd;

    $get_labs = $bdd->query("SELECT * FROM lab");

    return $get_labs;
}

function get_lab ($lab_name) {
    global $bdd;

    $get_lab = $bdd->prepare("SELECT * FROM lab WHERE name = ?");
    $get_lab->execute(array($lab_name));

    return $get_lab->fetch();
}
