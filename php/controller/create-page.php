<?php

$meta_title = 'Create page';

if (isset($_POST['form-page-create'])) {
    $title = htmlspecialchars($_POST['title']);
    $name = str_only_letters_numbers(htmlspecialchars($_POST['name']), '-');
    $page_meta_title = htmlspecialchars($_POST['meta-title']);
    $content_html = htmlspecialchars($_POST['content-html']);
    $content_md = htmlspecialchars($_POST['content-md']);
    $lead_title = htmlspecialchars($_POST['lead-title']);
    $lead_text = htmlspecialchars($_POST['lead-text']);

    if (!empty($title) && !empty($name) && !empty($page_meta_title) && !empty($lead_title) && !empty($lead_text)) {
        $result = insert_page($page_meta_title, $name, $title, $content_html, $content_md, $lead_title, $lead_text);

        if ($result) {
            $notif = '<p class="alert alert-success">Page has been created successfully !</p>';
        } else {
            $notif = '<p class="alert alert-danger">There was an error while creating the page. Try again or contact an administrator.</p>';
        }
    } else {
        $notif = '<p class="alert alert-danger">All fields are required.</p>';
    }
}


require ('../php/view/create-page.view.php');
