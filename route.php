<?php

require_once "controller/MovieController.php";


define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$movieController = new MovieController();

switch ($params[0]) {
    case 'home':
        $movieController->showHome();
        break;
    case 'addMovieToDB':
        $movieController->addMovieToDB();
        break;
    case 'deleteMovie':
        $movieController->deleteMovie($params[1]);
        break;
        //añadir updateMovie
    case 'viewMovie':
        $movieController->viewMovie($params[1]);
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
