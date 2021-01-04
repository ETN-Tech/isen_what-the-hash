<?php

$meta_title = "Create lab";

if (isset($_POST['form-lab-create'])) {
    $title = htmlspecialchars($_POST['title']);
    $name = str_only_letters_numbers(htmlspecialchars($_POST['name']), '-');
    $lab_meta_title = htmlspecialchars($_POST['meta-title']);
    $abstract_html = htmlspecialchars($_POST['abstract-html']);
    $abstract_md = htmlspecialchars($_POST['abstract-md']);
    $script_instruction = htmlspecialchars($_POST['script-instruction']);
    $script_file = $_FILES['script-file'];

    if (!empty($title) && !empty($name) && !empty($lab_meta_title) && !empty($abstract_html) && !empty($abstract_md) && !empty($script_file)) {
        $file_name = $script_file['name'];
        $file_size = $script_file['size'];
        $file_tmp = $script_file['tmp_name'];
        $file_type= $script_file['type'];
        $file_error= $script_file['error'];

        // check if the is no error
        if ($file_error === 0) {
            // get file extension
            $file_explode = explode('.', $file_name);
            $file_ext = strtolower(end($file_explode));

            // check file extension
            if(in_array($file_ext,['py'])){
                chmod($file_tmp, 0755);

                // move uploaded file to php/lab
                move_uploaded_file($file_tmp, '../php/lab/'. $name .'.py');
                // change permissions
                chmod('../php/lab/'. $name .'.py', 0755);

                $result = insert_lab($lab_meta_title, $name, $title, $abstract_html, $abstract_md, $script_instruction);

                if ($result) {
                    $notif = '<p class="alert alert-success">Lab has been created successfully !</p>';
                } else {
                    $notif = '<p class="alert alert-danger">There was an error while creating the lab. Try again or contact an administrator.</p>';
                }
            } else {
                $notif = '<p class="alert alert-danger">Script extension is not allowed.</p>';
            }
        } else {
            $notif = '<p class="alert alert-danger">There was an error while uploading script. Try again or contact an administrator.</p>';
        }
    } else {
        $notif = '<p class="alert alert-danger">All fields are required.</p>';
    }
}

require ('../php/view/create-lab.view.php');
