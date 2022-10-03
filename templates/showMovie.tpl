{include file="templates/header.tpl"}

<a href="home">Volver</a>


<h1>{$movie->title}</h1>
<h2>{$movie->image}</h2>
<h2>{$movie->plot}</h2>
<h2>{$movie->year}</h2>
<h2>{$movie->director}</h2>

{include file="templates/footer.tpl"}