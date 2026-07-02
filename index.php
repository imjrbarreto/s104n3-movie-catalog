<?php declare(strict_types=1);

require_once __DIR__ . '/src/Cine.php';
require_once __DIR__ . '/src/CineCollection.php';


$cineBarcelona = new Cine('Cinemax', 'Barcelona');
$cineMadrid = new Cine('Cinefix', 'Madrid');


$cineBarcelona->addMovie(new Movie('Interestelar', 169, 'Christopher Nolan'));
$cineBarcelona->addMovie(new Movie('Origen', 148, 'Christopher Nolan'));
$cineBarcelona->addMovie(new Movie('El Padrino', 175, 'Francis Ford Coppola'));
$cineBarcelona->addMovie(new Movie('El Padrino II', 202, 'Francis Ford Coppola'));
$cineBarcelona->addMovie(new Movie('Parásitos', 132, 'Bong Joon-ho'));

$cineMadrid->addMovie(new Movie('Interestelar', 169, 'Christopher Nolan'));
$cineMadrid->addMovie(new Movie('El Padrino', 175, 'Francis Ford Coppola'));
$cineMadrid->addMovie(new Movie('Parásitos', 132, 'Bong Joon-ho'));
$cineBarcelona->addMovie(new Movie('Interestelar 2', 169, 'Christopher Nolan'));


$cineCollection = new CineCollection();
$cineCollection->addCine($cineBarcelona);
$cineCollection->addCine($cineMadrid);

echo 'Cine en Barcelona: ' . PHP_EOL;
$cineBarcelona->showListMovies();
echo 'Pelicula más larga: ' . $cineBarcelona->longestMovie() . PHP_EOL;
echo PHP_EOL;

echo 'Cine en Madrid: ' . PHP_EOL;
$cineMadrid->showListMovies();
echo 'Pelicula más larga: ' . $cineMadrid->longestMovie() . PHP_EOL;


echo PHP_EOL;
$directorName1 = 'Christopher Nolan';
$directorName2 = 'Francis Ford Coppola';

$moviesByDirector1 = $cineCollection->listMoviesByDirector($directorName1);
echo 'Películas dirigidas por ' . $directorName1 . ':' . PHP_EOL;
foreach ($moviesByDirector1 as $movie) {
    echo $movie . PHP_EOL;
}