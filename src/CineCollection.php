<?php declare(strict_types=1);

require_once __DIR__ . '/Cine.php';

class CineCollection {
  private array $cines = [];

  public function addCine(Cine $cine):void {
    $this->cines[] = $cine;
  }

  public function listMoviesByDirector(string $directorName): array {
    $allMovies = [];
    $listMoviesUnique = [];

    foreach($this->cines as $cine) {
      $allMovies = array_merge($allMovies, $cine->movieByDirector($directorName));
    }
    foreach($allMovies as $movie) {
      $listMoviesUnique[] = $movie->title;
    }
    $listMoviesUnique = array_values(array_unique($listMoviesUnique));

    return $listMoviesUnique;
  }
}