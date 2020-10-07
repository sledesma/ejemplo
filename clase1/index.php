<?php

if(isset($_GET['action'])) {
    switch($_GET['action']) {
        case 'productos':
            header('Content-type: application/json');
            echo json_encode(array('id' => 1));
        break;
    }
} else {
    require_once "static/index.html";
}