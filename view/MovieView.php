<?php

require_once "./libraries/smarty-4.2.1/libs/Smarty.class.php";

class MovieView {

    private $smarty;


    function __construct() {
        $this->smarty = new Smarty();
    }

    function showMovies($movies) { //refactoring smarty
        $this->smarty->assign('indexTitle', 'Todas las peliculas');
        $this->smarty->assign('movies', $movies);
        $this->smarty->display('templates/index.tpl');
    }

    function showHomeLocation() {
        header("Location: " . BASE_URL . "home");
    }


    function showMovie($movie) {
        $this->smarty->assign('movie', $movie);
        $this->smarty->display('templates/showMovie.tpl');
    }
}
