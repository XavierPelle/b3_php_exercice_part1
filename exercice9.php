<?php

/**
 * ÉNONCÉ:
 * Créez une classe Movie avec les propriétés 
 * title, genre et ageRestriction. 
 * Ajoutez une méthode canWatch($viewerAge) qui retourne true 
 * si l’âge du spectateur ($viewerAge) est supérieur ou égal à ageRestriction, 
 * sinon false.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */


class Movie
{

    public function __construct(private string $title, private string $genre, private  int $ageRestriction)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->ageRestriction = $ageRestriction;
    }

    public function canWatch($viewerAge): bool
    {
        $canWatch = false;
        if ($viewerAge >= $this->ageRestriction) {
            $canWatch = true;
        }
        return $canWatch;
    }
}

$movie = new Movie("Film", "Action", 18);

echo $movie->canWatch(20);

echo $movie->canWatch(16);