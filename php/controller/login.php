<?php

if (isset($_SESSION['id'])) {
    header('Location: /admin');
    die();
}

$meta_title = 'Login';

if (isset($_POST['form-login'])) {
    if (isset($_POST['username'], $_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $username = htmlspecialchars(strtolower($_POST['username']));
        $password = htmlspecialchars($_POST['password']);

        $user = get_user_by_username($username);

        // verify if user exist
        if ($user) {
            // verify password
            if (password_verify($password, $user['password_hash'])) {
                $_SESSION['id'] = $user['id'];

                set_last_connexion($user['id']);

                header('Location: /admin');
                die();
            } else {
                $error = "Username or password incorrect";
            }
        } else {
            $error = "Username or password incorrect";
        }
    } else {
        $error = "All fields are required.";
    }
}


require ('../php/view/login.view.php');
