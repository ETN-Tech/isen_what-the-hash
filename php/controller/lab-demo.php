<?php

// get lab details
$lab = get_lab($params['page']);

if ($lab === false) {
    header('Location: /lab');
    die();
}

$meta_title = 'Lab '.$lab['meta_title'];

// if python lab
if ($lab['python']) {
    $lab_view = 'python';

    // check if execution asked
    if (isset($_POST['form-python'])) {

        // check if no input needed
        if (empty($lab['script_instruction'])) {
            // simple command

            $command = "timeout 1m python3 /var/www/isen-caas/php/lab/". $lab['name'] .".py";

            // execute and capture output
            ob_start();
            passthru(escapeshellcmd($command));
            $output = ob_get_clean();
        }
        // check if needed input was sent
        else if (isset($_POST['input']) && !empty($_POST['input'])) {
            $input = str_only_letters_numbers(htmlspecialchars($_POST['input']));
            // command with args
            $command = "timeout 1m python3 /var/www/isen-caas/php/lab/" . $lab['name'] . ".py ". $input;

            // execute and capture output
            ob_start();
            passthru(escapeshellcmd($command));
            $output = ob_get_clean();
        }
        else {
            $output = 'Error : Input is needed.';
        }
    } else {
        $output = '<i>Waiting for script execution...</i>';
    }
}
// if custom lab
else {
    $lab_view = $lab['name'];
    // include custom file
    include('../php/lab/' . $lab['name'] . '.php');
}


require_once('../php/view/lab-demo.view.php');
