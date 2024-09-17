<?php

class Movie {
    
    public $title;
    public $director;
    public $year;
    public $genre;

    public function __construct($title, $director, $year, $genre) {
        $this->title = $title;
        $this->director = $director;
        $this->year = $year;
        $this->genre = $genre;
    }

    public function getMovieInfo() {
        return "Title: " . $this->title . "<br>" .
               "Director: " . $this->director . "<br>" .
               "Year: " . $this->year . "<br>" .
               "Genre: " . $this->genre . "<br><br>";
    }
}

$movie1 = new Movie("Us", "Jordan Peele", 2019, "Horror/Mystery");
$movie2 = new Movie("The Irishman", "Martin Scorsese", 2019, "Crime/Mystery");

echo $movie1->getMovieInfo();
echo $movie2->getMovieInfo();

?>