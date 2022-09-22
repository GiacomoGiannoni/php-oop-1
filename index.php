<?php
    class Movie
    {
        public $name;
        public $year;
        public $genre;
        public $director;

        public function __construct($name, $year, $genre, $director)
        {
            $this->name = $name;
            $this->year = $year;
            $this->genre = $genre;
            $this->director = $director;
        }
    }
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
        
    </body>
</html>