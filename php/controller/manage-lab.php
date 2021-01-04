<?php

restrict_admin();

if (!isset($params['name'])) {
    header('Location: /admin');
    die();
}

// if abstract save asked
if (isset($_POST['form-lab-update'])) {
    $lab = get_lab($params['name']);

    // lab update
    $title = htmlspecialchars($_POST['title']);
    $lab_meta_title = htmlspecialchars($_POST['meta-title']);
    $abstract_html = htmlspecialchars($_POST['abstract-html']);
    $abstract_md = htmlspecialchars($_POST['abstract-md']);

    $error = 0;

    // check required fields
    if (empty($title) || empty($lab_meta_title) || empty($abstract_html) || empty($abstract_md)) {
        $notif = '<p class="alert alert-danger">All fields are required.</p>';
        $error++;
    }

    // if python lab
    if ($lab['python']) {
        $script_instruction = htmlspecialchars($_POST['script-instruction']);
        $script_file = $_FILES['script-file'];

        // check required fields
        if (!empty($script_file)) {
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
                    // move uploaded file to php/lab
                    move_uploaded_file($file_tmp, '../php/lab/'. $lab['name'] .'.py');
                    // change permissions
                    chmod('../php/lab/'. $lab['name'] .'.py', 0755);
                } else {
                    $notif = '<p class="alert alert-danger">Script extension is not allowed.</p>';
                    $error++;
                }
            } else if ($file_error !== 4) {
                $notif = '<p class="alert alert-danger">There was an error while uploading script. Try again or contact an administrator.</p>';
                $error++;
            }
        } else {
            $notif = '<p class="alert alert-danger">All fields are required.</p>';
            $error++;
        }
    } else {
        $script_instruction = null;
    }

    // check if
    if ($error == 0) {
        $result = update_lab ($lab_meta_title, $title, $abstract_html, $abstract_md, $script_instruction, $params['name']);

        if ($result) {
            $notif = '<p class="alert alert-success">Lab has been updated successfully !</p>';
        } else {
            $notif = '<p class="alert alert-danger">There was an error while updating the lab. Try again or contact an administrator.</p>';
        }
    }
}

$lab = get_lab($params['name']);

$meta_title = 'Edit lab - '. $lab['meta_title'];

// if delete lab asked
if (isset($_POST['form-lab-delete'])) {
    // delete lab
    if(delete_element('lab', $lab['id'])) {
        header('Location: /admin');
        die();
    } else {
        $notif = '<p class="alert alert-danger">There was an error while deleting the lab. Try again or contact an administrator.</p>';
    }
}

require ('../php/view/manage-lab.view.php');
