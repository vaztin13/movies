<?php

require_once "db.php";
require_once "templates/home.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        showHome();
        break;
    case 'addMovieToDB':
        addMovieToDB();
        break;
    case 'deleteMovie':
        deleteMovie($params[1]);
        break;
    case 'viewMovie':
        viewMovie($params[1]);
        break;
    case 'action':
        showActionMovie();
        break;
    case 'romance':
        showRomanceMovie();
        break;
    case 'comedy':
        showComedyMovie();
        break;
    case 'horror':
        showHorrorMovie();
        break;
    case 'science-fiction':
        showSfMovie();
        break;
    case 'drama':
        showDramaMovie();
        break;
    default:
        echo ('404 page not found');
        break;
}
