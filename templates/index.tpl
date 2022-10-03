{include file="templates/header.tpl"}

<h1>{$indexTitle}</h1>

<div class="container">
    <ul>
        {foreach from=$movies item=$movie}
            <li>
                {* {$movie->title} - {$movie->year} *}
                <a href="viewMovie/{$movie->id}">{$movie->title} - {$movie->year}</a>
                <a href="deleteMovie/{$movie->id}">Borrar</a>
            </li>

        {/foreach}
    </ul>

    <form action="addMovieToDB" method="POST">

        <input type="text" name="title" id="title">
        <input type="text" name="plot" id="plot">
        <input type="number" name="year" id="year">
        <input type="text" name="director" id="director">
        <input type="submit" value="Agregar">

    </form>
</div>
{include file="templates/footer.tpl"}