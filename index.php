<?php 

class Movie {

    private $title;
    private $country;
    private $director;
    private $year;

    function __construct($title, $country, $director, $year) {
        $this->title = $title;
        $this->country = $country;
        $this->year = $year;
        $this->director = $director;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getCountry() {
        return $this->country;
    }

    public function getDirector() {
        return $this->director;
    }
    
    public function getYear() {
        return $this->year;
    }

}

$lotr = new Movie('The Lord of the Rings: The Fellowship of the Ring', 'United States', 'Peter Jackson', '2001');
$blueVelvet = new Movie('Blue Velvet', 'United States', 'David Lynch', '1986');

var_dump($lotr);
echo '<br>';
var_dump($blueVelvet);

echo '<br>';
echo $lotr->getTitle() . ' directed by ' . $lotr->getDirector();
echo '<br>';
echo $blueVelvet->getTitle() . ' - filmed in North Carolina, ' . $blueVelvet->getCountry();

?>