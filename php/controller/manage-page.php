<?php

restrict_admin();

if (!isset($params['name'])) {
    header('Location: /admin');
    die();
}

// if content save asked
if (isset($_POST['form-page-update'])) {
    // page update
    $title = htmlspecialchars($_POST['title']);
    $page_meta_title = htmlspecialchars($_POST['meta-title']);
    $content_html = htmlspecialchars($_POST['content-html']);
    $content_md = htmlspecialchars($_POST['content-md']);
    $lead_title = htmlspecialchars($_POST['lead-title']);
    $lead_text = htmlspecialchars($_POST['lead-text']);

    if (!empty($title) && !empty($page_meta_title) && !empty($lead_title) && !empty($lead_text)) {
        $result = update_page($page_meta_title, $title, $content_html, $content_md, $lead_title, $lead_text, $params['name']);

        if ($result) {
            $notif = '<p class="alert alert-success">Page has been updated successfully !</p>';
        } else {
            $notif = '<p class="alert alert-danger">There was an error while updating the page. Try again or contact an administrator.</p>';
        }
    } else {
        $notif = '<p class="alert alert-danger">All fields are required.</p>';
    }
}

$page = get_page($params['name']);

$meta_title = 'Edit page - '. $page['meta_title'];

// if delete page asked
if (isset($_POST['form-page-delete'])) {
    $error = 0;
    $articles = get_articles($page['id']);

    // delete articles linked
    foreach ($articles as $article) {
        if (!delete_element('article', $article['id'])) {
            $error++;
            break;
        }
    }

    // delete page
    if($error == 0 && delete_element('page', $page['id'])) {
        header('Location: /admin');
        die();
    } else {
        $notif = '<p class="alert alert-danger">There was an error while deleting the page. Try again or contact an administrator.</p>';
    }
}

require ('../php/view/manage-page.view.php');
