<?php


function getMovies() {
    $db = new PDO('mysql:host=localhost;' . 'dbname=movie;charset=utf8', 'root', '');

    $sentencia = $db->prepare("select * from movies");
    $sentencia->execute();
    $movies = $sentencia->fetchAll(PDO::FETCH_OBJ);
    foreach($movies as $movie) {
        echo $movie->title;
    }

}
