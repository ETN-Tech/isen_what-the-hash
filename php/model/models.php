<?php

/* GENERAL */

function delete_element ($table, $elem_id) {
    global $bdd;

    if (in_array($table, ['page','lab','article'])) {
        $del_elem = $bdd->prepare("DELETE FROM " . $table . " WHERE id = ?");
        $del_elem->execute(array($elem_id));

        return $del_elem;
    } else {
        return false;
    }
}


/* USERS */

function get_user_by_username($username) {
    global $bdd;

    $get_user = $bdd->prepare("SELECT * FROM account WHERE username = ?");
    $get_user->execute(array($username));

    return $get_user->fetch();
}

function get_user($user_id) {
    global $bdd;

    $get_user = $bdd->prepare("SELECT * FROM account WHERE id = ?");
    $get_user->execute(array($user_id));

    return $get_user->fetch();
}

function set_last_connexion($user_id) {
    global $bdd;

    $upd_user = $bdd->prepare("UPDATE account SET last_connexion = NOW() WHERE id = ?");
    $upd_user->execute(array($user_id));
}


/* PAGES */

function get_pages() {
    global $bdd;

    $get_pages = $bdd->query("SELECT * FROM page ORDER BY menu_order ASC");

    return $get_pages;
}

function get_page($page_name) {
    global $bdd;

    $get_page = $bdd->prepare("SELECT * FROM page WHERE name = ?");
    $get_page->execute(array($page_name));

    return $get_page->fetch();
}

function get_article_page($article_name) {
    global $bdd;

    $get_page = $bdd->prepare("SELECT page.* FROM page INNER JOIN article ON page.id = article.page_id WHERE article.name = ?");
    $get_page->execute(array($article_name));

    return $get_page->fetch();
}

function insert_page ($meta_title, $name, $title, $content_html, $content_md, $lead_title, $lead_text) {
    global $bdd;

    $ins_page = $bdd->prepare("INSERT INTO page (meta_title, name, title, content_html, content_md, lead_title, lead_text) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $ins_page->execute(array($meta_title, $name, $title, $content_html, $content_md, $lead_title, $lead_text));

    return $ins_page;
}

function update_page ($meta_title, $title, $content_html, $content_md, $lead_title, $lead_text, $page_name) {
    global $bdd;

    $upd_page = $bdd->prepare("UPDATE page SET meta_title = ?, title = ?, content_html = ?, content_md = ?, lead_title = ?, lead_text = ? WHERE name = ?");
    $upd_page->execute(array($meta_title, $title, $content_html, $content_md, $lead_title, $lead_text, $page_name));

    return $upd_page;
}


/* ARTICLES  */

function get_articles ($page_id) {
    global $bdd;

    $get_articles = $bdd->prepare("SELECT * FROM article WHERE page_id = ?");
    $get_articles->execute(array($page_id));

    return $get_articles;
}

function get_article ($article_name) {
    global $bdd;

    $get_article = $bdd->prepare("SELECT * FROM article WHERE name = ? ORDER BY id");
    $get_article->execute(array($article_name));

    return $get_article->fetch();
}

function insert_article ($meta_title, $name, $page_id, $title, $content_html, $content_md, $abstract_html, $abstract_md) {
    global $bdd;

    $ins_article = $bdd->prepare("INSERT INTO article (meta_title, name, page_id, title, content_html, content_md, abstract_html, abstract_md) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $ins_article->execute(array($meta_title, $name, $page_id, $title, $content_html, $content_md, $abstract_html, $abstract_md));

    return $ins_article;
}

function update_article ($meta_title, $title, $abstract_html, $abstract_md, $content_html, $content_md, $article_name) {
    global $bdd;

    $upd_article = $bdd->prepare("UPDATE article SET meta_title = ?, title = ?, abstract_html = ?, abstract_md = ?, content_html = ?, content_md = ? WHERE name = ?");
    $upd_article->execute(array($meta_title, $title, $abstract_html, $abstract_md, $content_html, $content_md, $article_name));

    return $upd_article;
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

function insert_lab ($meta_title, $name, $title, $abstract_html, $abstract_md, $script_instruction) {
    global $bdd;

    $ins_lab = $bdd->prepare("INSERT INTO lab (meta_title, name, title, abstract_html, abstract_md, script_instruction) VALUES (?, ?, ?, ?, ?, ?)");
    $ins_lab->execute(array($meta_title, $name, $title, $abstract_html, $abstract_md, $script_instruction));

    return $ins_lab;
}

function update_lab ($meta_title, $title, $abstract_html, $abstract_md, $script_instruction, $lab_name) {
    global $bdd;

    $upd_lab = $bdd->prepare("UPDATE lab SET meta_title = ?, title = ?, abstract_html = ?, abstract_md = ?, script_instruction = ? WHERE name = ?");
    $upd_lab->execute(array($meta_title, $title, $abstract_html, $abstract_md, $script_instruction, $lab_name));

    return $upd_lab;
}
