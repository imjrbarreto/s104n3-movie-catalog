<?php declare(strict_types=1);

class Movie {
  public string $title;
  public int $duration;
  public string $directorName;

  public function __construct(string $title, int $duration, string $directorName) {
    $this->title = $title;
    $this->duration = $duration;
    $this->directorName = $directorName;
  }

  
}