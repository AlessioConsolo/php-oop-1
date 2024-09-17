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
?>
