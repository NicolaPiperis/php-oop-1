<?php
    echo "<h1>" . "Hello, exercise!" . "</h1>" ;
    echo "<br> <br>";

    class Movie {

        public $title;
        public $vote;
        public $platform_streaming;

        public array $topics;

        public function __construct($title, $vote, $platform_streaming, ...$topics) {
    
            $this -> title = $title;
            $this -> vote = $vote;
            $this -> platform_streaming = $platform_streaming;

            $this -> topics = $topics;
    
        }

        public function getFulldetails() {

            return $this -> title . " " . $this -> vote . " " . $this -> platform_streaming;
        }
    }

    $movie1 = new Movie("Titanic", "5/5", "Netflix");
    $movie2 = new Movie("The incledible Hulk", "3/5", "Disney plus", ["Fantasy", "Romantic"]);
    $movie3 = new Movie("Il Padrino", "4/5", "Rai");

    echo "<h2>" . $movie1 -> getFulldetails() . "</h2>";

    echo "<br> <br>";

    echo "<h2>" . $movie2 -> getFulldetails() . "</h2>";

    echo "<br> <br>";

    echo "<h3>" . $movie3 -> title . "</h3>" ;

    echo "<br> <br>";

    echo var_dump($movie1);

    echo "<br> <br>";

    echo var_dump($movie2);

?>