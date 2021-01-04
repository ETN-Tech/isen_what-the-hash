<?php

restrict_admin();

if (!isset($params['name'])) {
    header('Location: /admin');
    die();
}

// if content save asked
if (isset($_POST['form-article-update'])) {
    // article update
    $title = htmlspecialchars($_POST['title']);
    $article_meta_title = htmlspecialchars($_POST['meta-title']);
    $content_html = htmlspecialchars($_POST['content-html']);
    $content_md = htmlspecialchars($_POST['content-md']);
    $abstract_html = htmlspecialchars($_POST['abstract-html']);
    $abstract_md = htmlspecialchars($_POST['abstract-md']);

    if (!empty($title) && !empty($article_meta_title) && !empty($abstract_html) && !empty($abstract_md)) {
        $result = update_article ($article_meta_title, $title, $abstract_html, $abstract_md, $content_html, $content_md, $params['name']);

        if ($result) {
            $notif = '<p class="alert alert-success">Article has been updated successfully !</p>';
        } else {
            $notif = '<p class="alert alert-danger">There was an error while updating the article. Try again or contact an administrator.</p>';
        }
    } else {
        $notif = '<p class="alert alert-danger">All fields are required.</p>';
    }
}

$article = get_article($params['name']);

$meta_title = 'Edit article - '. $article['meta_title'];

$page = get_article_page($article['name']);

// if delete article asked
if (isset($_POST['form-article-delete'])) {
    // delete article
    if(delete_element('article', $article['id'])) {
        header('Location: /admin');
        die();
    } else {
        $notif = '<p class="alert alert-danger">There was an error while deleting the article. Try again or contact an administrator.</p>';
    }
}

require ('../php/view/manage-article.view.php');
