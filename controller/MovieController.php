<?php
require_once "./model/MovieModel.php";
require_once "./view/MovieView.php";


class MovieController {

    private $model;
    private $view;

    function __construct() {
        $this->model = new MovieModel();
        $this->view = new MovieView();

    }

    function checkLoggedIn() {
        
        session_start();
        if(!isset($_SESSION["email"])) {
            $this->view->showLoginLocation();
        }
    }


    function showHome() {
        $this->checkLoggedIn(); //se tiene q poner en todas las paginas menos en login controller para evitar bucle de 
                                // redireccionamiento
        $movies = $this->model->getMovies();
        $this->view->showMovies($movies);

    }

    function addMovieToDB() {
        $this->checkLoggedIn();
        $this->model->addMovie($_POST['title'], $_POST['plot'], $_POST['year'], $_POST['director']);
        //header("Location: home");
        $this->view->showHomeLocation();
    }

    function deleteMovie($id) {
        $this->checkLoggedIn();
        $this->model->deleteMovieFromDB($id);
        $this->view->showHomeLocation();
    }

    function viewMovie($id) {
        $this->checkLoggedIn();
        $moviesSelected = $this->model->getMovie($id);
        $this->view->showMovie($moviesSelected);
    }


    
}