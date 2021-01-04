<?php

restrict_admin();

$meta_title = 'Administration';

$user = get_user($_SESSION['id']);

$pages = get_pages();


require ('../php/view/admin.view.php');
