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

    function showHome() {

        $movies = $this->model->getMovies();
        $this->view->showMovies($movies);

    }

    function addMovieToDB() {
        $this->model->addMovie($_POST['title'], $_POST['plot'], $_POST['year'], $_POST['director']);
        //header("Location: home");
        $this->view->showHomeLocation();
    }

    function deleteMovie($id) {
        $this->model->deleteMovieFromDB($id);
        $this->view->showHomeLocation();
    }

    function viewMovie($id) {
        $moviesSelected = $this->model->getMovie($id);
        $this->view->showMovie($moviesSelected);
    }
}