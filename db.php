<?php


/* 
function showActionMovie() {
    $db = new PDO('mysql:host=localhost;' . 'dbname=movie;charset=utf8', 'root', '');

    $sentence = $db->prepare("SELECT * from movies WHERE genre_type_id = 5");
    $sentence->execute();
    $movies = $sentence->fetchAll(PDO::FETCH_OBJ);
    foreach($movies as $movie) {
        echo $movie->title;
        echo $movie->image;
        echo $movie->plot;
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
        echo $movie->plot;
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
        echo $movie->plot;
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
        echo $movie->plot;
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
        echo $movie->plot;
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
        echo $movie->plot;
        echo $movie->year;
        echo $movie->director;
    }
} */

