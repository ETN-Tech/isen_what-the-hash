<?php

function format_date($date) {
    $time = strtotime($date);

    return ucfirst(strftime('%A %e %B %Y', $time))." - ".strftime('%Hh%M', $time);
}
