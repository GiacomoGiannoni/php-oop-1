<?php
    class Movie
    {
        public $name;
        public $year;
        public $genre;
        public $director;
        public $synopsis;
        public $image;

        public function __construct($name, $year, $genre, $director, $synopsis, $image)
        {
            $this->name = $name;
            $this->year = $year;
            $this->genre = $genre;
            $this->director = $director;
            $this->synopsis = $synopsis;
            $this->image = $image;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getYear()
        {
            return $this->year;
        }

        public function getGenre()
        {
            return $this->genre;
        }

        public function getDirector()
        {
            return $this->director;
        }

        public function getSynopsis()
        {
            return $this->synopsis;
        }

        public function getImage()
        {
            return $this->image;
        }
    }

    $movie1_synopsis = "Una missione temeraria ed eroica nel cuore della Germania nazista, ormai al collasso. In inferiorità numerica, disarmati e con una recluta giovane e inesperta nel plotone, Wardaddy e i suoi uomini dovranno ricorrere a tutto il proprio coraggio e alla propria arguzia per sopravvivere agli orrori della guerra. ";
    $movie2_synopsis = "The Adam Project, film diretto da Shawn Levy, racconta la storia di un uomo, Adam Reed, che torna indietro nel tempo per chiedere aiuto a un se stesso tredicenne. I viaggi del tempo nel futuro sono possibili, sebbene solo agli inizi, ma Adam, che ha da poco perso suo padre, è pronto a rischiare tutto pur di tornare indietro e compiere una missione top secret. L'uomo insieme al se stesso più giovane dovrà convincere suo padre, un fisico, a salvare il mondo, prima che per il futuro sia troppo tardi. Aiutati dal genitore, i tre inizieranno a collaborare, ma i due Adam dovranno fare i conti anche con la perdita del padre, che uno ha vissuto e l'altro ha appena appreso. La riuscita della missione, però, si complica a causa proprio dei due Adam, che scopriranno nonostante siano la stessa persona di non andare per nulla d'accordo, ma dovranno andarsi incontro l'un l'altro affinché l'impresa titanica abbia successo. ";
    $movie1_image = "https://mr.comingsoon.it/imgdb/locandine/big/50045.jpg";
    $movie2_image = "https://pad.mymovies.it/filmclub/2021/02/024/locandinapg1.jpg";
    $movie_1 = new Movie('Fury', '2014', 'Action', 'David Ayer', $movie1_synopsis, $movie1_image);
    $movie_2 = new Movie('The Adam Project', '2022', 'Sci-fi', 'Shawn Levy', $movie2_synopsis, $movie2_image);

    $movies = [];
    $movies[] = $movie_1;
    $movies[] = $movie_2;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>movies</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>MY MOVIES</h1>
            <?php foreach ($movies as $movie) : ?>
                <h2><?= $movie->getName() ?></h2>
                <ul>
                    <li><span><?= $movie->getDirector() ?></span></li>
                    <li><span><?= $movie->getYear() ?></span></li>
                    <li><span><?= $movie->getGenre() ?></span></li>
                </ul>
                <p><?= $movie->getSynopsis() ?></p>
                <img src="<?= $movie->getImage() ?>" alt="copertina">
            <?php endforeach; ?>
        </div>
    </body>
</html>