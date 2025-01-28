<?php

/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos

 */

class Article
{
    public function __construct(
        protected string $title,
        protected string $content,
    ) {
        $this->title = $title;
        $this->content = $content;
    }

    public function getSummary($maxLength): string
    {
        $count = strlen($this->title);
        $slice = $count - $maxLength;
        return substr($this->title, 0, $slice) . "..." . " " . substr($this->content, 0, $slice) . "...";
    }
}

$article = new article("Titreeeee", "Contenteeeee");

echo $article->getSummary(5);
