<?php

$meta_title = 'Create article';

if (isset($_POST['form-article-create'])) {
    $title = htmlspecialchars($_POST['title']);
    $name = str_only_letters_numbers(htmlspecialchars($_POST['name']), '-');
    $article_meta_title = htmlspecialchars($_POST['meta-title']);
    $content_html = htmlspecialchars($_POST['content-html']);
    $content_md = htmlspecialchars($_POST['content-md']);
    $abstract_html = htmlspecialchars($_POST['abstract-html']);
    $abstract_md = htmlspecialchars($_POST['abstract-md']);

    $page = get_page($params['name']);

    if (!empty($title) && !empty($name) && !empty($article_meta_title) && !empty($abstract_html) && !empty($abstract_md)) {
        $result = insert_article ($article_meta_title, $name, $page['id'], $title, $content_html, $content_md, $abstract_html, $abstract_md);

        if ($result) {
            $notif = '<p class="alert alert-success">Article has been created successfully !</p>';
        } else {
            $notif = '<p class="alert alert-danger">There was an error while creating the article. Try again or contact an administrator.</p>';
        }
    } else {
        $notif = '<p class="alert alert-danger">All fields are required.</p>';
    }
}

require ('../php/view/create-article.view.php');
