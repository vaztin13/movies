<?php

class MovieModel {


    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=movie;charset=utf8', 'root', '');
    }


    function getMovies() {    
        $sentence = $this->db->prepare("SELECT * from movies");
        $sentence->execute();
        $movies = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $movies;
    }


    function addMovie($title, $plot, $year, $director){
        $sentence = $this->db->prepare("INSERT INTO movies(title, plot, year, director) VALUES(?, ?, ?, ?)");
        $sentence->execute(array($title,$plot,$year, $director));
    }

    function deleteMovieFromDB($id) {
        $sentence = $this->db->prepare("DELETE FROM movies WHERE id = ? ");
        $sentence->execute(array($id));
    }

    function getMovie($id) {  
        $sentence = $this->db->prepare("SELECT * from movies WHERE id = ?");
        $sentence->execute(array($id));
        $movie = $sentence->fetch(PDO::FETCH_OBJ);
        return $movie;
    }
    
}