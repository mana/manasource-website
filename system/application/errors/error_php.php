<?php

    // forward to the specific 404 error view
    $ci =& get_instance();

    $data = array(  'severity'  => $severity,
                    'message'   => $message,
                    'filepath'  => $filepath,
                    'line'      => $line );
    $ci->output->showPage('errors/error_php', $data);
    exit;
?>