<?php

function connectToDB(){
    return new PDO('mysql:host=localhost;' . 'dbname=movie;charset=utf8', 'root', '');
}



function getMovies() {
    $db = connectToDB();

    $sentence = $db->prepare("SELECT * from movies");
    $sentence->execute();
    $movies = $sentence->fetchAll(PDO::FETCH_OBJ);
    return $movies;
}

function getMovie($id) {
    $db = connectToDB();

    $sentence = $db->prepare("SELECT * from movies WHERE id = ?");
    $sentence->execute(array($id));
    $movie = $sentence->fetch(PDO::FETCH_OBJ);
    return $movie;
}

function addMovie($title, $synopsis, $year, $director){
    $db = connectToDB();
    $sentencia = $db->prepare("INSERT INTO movies(title, synopsis, year, director) VALUES(?, ?, ?, ?)");
    $sentencia->execute(array($title,$synopsis,$year, $director));
}

function deleteMovieFromDB($id) {
    $db = connectToDB();
    $sentence = $db->prepare("DELETE FROM movies WHERE id = ? ");
    $sentence->execute(array($id));
}


function showActionMovie() {
    $db = new PDO('mysql:host=localhost;' . 'dbname=movie;charset=utf8', 'root', '');

    $sentence = $db->prepare("SELECT * from movies WHERE genre_type_id = 5");
    $sentence->execute();
    $movies = $sentence->fetchAll(PDO::FETCH_OBJ);
    foreach($movies as $movie) {
        echo $movie->title;
        echo $movie->image;
        echo $movie->synopsis;
        echo $movie->year;
        echo $movie->director;
    }
}

function showRomanceMovie() {
    $db = new PDO('mysql:host=localhost;' . 'dbname=movie;charset=utf8', 'root', '');

    $sentence = $db->prepare("SELECT * from movies WHERE genre_type_id = 2");
    $sentence->execute();
    $movies = $sentence->fetchAll(PDO::FETCH_OBJ);
    foreach($movies as $movie) {
        echo $movie->title;
        echo $movie->image;
        echo $movie->synopsis;
        echo $movie->year;
        echo $movie->director;
    }
}

function showComedyMovie() {
    $db = new PDO('mysql:host=localhost;' . 'dbname=movie;charset=utf8', 'root', '');

    $sentence = $db->prepare("SELECT * from movies WHERE genre_type_id = 3");
    $sentence->execute();
    $movies = $sentence->fetchAll(PDO::FETCH_OBJ);
    foreach($movies as $movie) {
        echo $movie->title;
        echo $movie->image;
        echo $movie->synopsis;
        echo $movie->year;
        echo $movie->director;
    }
}

function showHorrorMovie() {
    $db = new PDO('mysql:host=localhost;' . 'dbname=movie;charset=utf8', 'root', '');

    $sentence = $db->prepare("SELECT * from movies WHERE genre_type_id = 6");
    $sentence->execute();
    $movies = $sentence->fetchAll(PDO::FETCH_OBJ);
    foreach($movies as $movie) {
        echo $movie->title;
        echo $movie->image;
        echo $movie->synopsis;
        echo $movie->year;
        echo $movie->director;
    }
}

function showSfMovie() {
    $db = new PDO('mysql:host=localhost;' . 'dbname=movie;charset=utf8', 'root', '');

    $sentence = $db->prepare("SELECT * from movies WHERE genre_type_id = 4");
    $sentence->execute();
    $movies = $sentence->fetchAll(PDO::FETCH_OBJ);
    foreach($movies as $movie) {
        echo $movie->title;
        echo $movie->image;
        echo $movie->synopsis;
        echo $movie->year;
        echo $movie->director;
    }
}

function showDramaMovie() {
    $db = new PDO('mysql:host=localhost;' . 'dbname=movie;charset=utf8', 'root', '');

    $sentence = $db->prepare("SELECT * from movies WHERE genre_type_id = 7");
    $sentence->execute();
    $movies = $sentence->fetchAll(PDO::FETCH_OBJ);
    foreach($movies as $movie) {
        echo $movie->title;
        echo $movie->image;
        echo $movie->synopsis;
        echo $movie->year;
        echo $movie->director;
    }
}

