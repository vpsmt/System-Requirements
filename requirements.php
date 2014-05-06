<?php

    require_once('functions.php');
    $results = prerequisites_check();

header('Content-Type: application/json');
echo json_encode($results);