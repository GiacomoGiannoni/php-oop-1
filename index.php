<?php
    class Movie
    {
        public $name;
        public $year;
        public $genre;
        public $director;
        public $synopsis;

        public function __construct($name, $year, $genre, $director, $synopsis)
        {
            $this->name = $name;
            $this->year = $year;
            $this->genre = $genre;
            $this->director = $director;
            $this->synopsis = $synopsis;
        }
    }

    $movie1_synopsis = "Una missione temeraria ed eroica nel cuore della Germania nazista, ormai al collasso. In inferiorità numerica, disarmati e con una recluta giovane e inesperta nel plotone, Wardaddy e i suoi uomini dovranno ricorrere a tutto il proprio coraggio e alla propria arguzia per sopravvivere agli orrori della guerra. ";
    $movie_1 = new Movie('Fury', '2014', 'Action', 'David Ayer', $movie1_synopsis);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>movies</title>
    </head>
    <body>
        <h1>MY MOVIES</h1>
        <article>
            <h2><?= $movie_1->name ?></h2>
            <address><?= $movie_1->year ?></address>
            <address><?= $movie_1->genre ?></address>
            <address><?= $movie_1->director ?></address>
            <p><?= $movie_1->synopsis ?></p>
        </article>
    </body>
</html>