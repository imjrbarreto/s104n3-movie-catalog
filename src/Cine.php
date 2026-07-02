<?php declare(strict_types=1);

require_once __DIR__ . '/Movie.php';

class Cine {
  public string $name;
  public string $poblation;
  public array $listMovies;

  public function __construct(string $name, string $poblation) {
    $this->name = $name;
    $this->poblation = $poblation;
    $this->listMovies = [];
  }
  
  public function addMovie(Movie $movie):void {
    $this->listMovies[] = $movie;
  }


  public function longestMovie() {
    $time = 0;
    $longestMovie = '';
    foreach ($this->listMovies as $movie) {
      if($movie->duration > $time) {
        $time = $movie->duration;
        $longestMovie = $movie->title;
      }
    }
    return $longestMovie;
  }

  public function showListMovies() {
    foreach ($this->listMovies as $movie) {
      echo $movie->title .' - ' . $movie->duration . ' - ' . $movie->directorName . PHP_EOL;
    }
  }

  public function movieByDirector(string $directorName): array {
    $moviesByDirector = [];
    foreach($this->listMovies as $movie) {
      if($movie->directorName === $directorName) {
        $moviesByDirector[] = $movie;
      }
    }
    return $moviesByDirector;
  }
}