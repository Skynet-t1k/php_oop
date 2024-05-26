<?php
// Crea un nuovo file chiamato index.php e, importando la classe appena creata, crea una classe Post con i seguenti attributi:
// Titolo
// Categoria
// Tag

// Crea delle istanze di classe Post, iniettando la dipendenze Categoria all’interno dell’attributo dedicato. Crea anche dei metodi per visualizzare gli articoli completi.



require_once 'class.php';

class Post
{
    public $titolo;
    public $categoria;
    public $tag;

    public function __construct(string $titolo, Category $categoria, string $tag)
    {
        $this->titolo = $titolo;
        $this->categoria = $categoria;
        $this->tag = $tag;
    }

    public function stampaArticolo()
    {
        echo "Categoria: ";
        $this->categoria->getMyCategory();
        echo "Titolo: " . $this->titolo . "\n";
        echo "Tag: " . $this->tag .  "\n";
    }
}


$post1 = new Post("ultime notizie", new Attualita, "news, politica");
$post2 = new Post("Risultati sportivi", new Sport, "calcio, tennis");
$post3 = new Post("Gossip del momento", new Gossip, "celebrità, scandali");
$post4 = new Post("Lezioni di storia", new Storia, "medioevo, rinascimento");

$post1->stampaArticolo();
$post2->stampaArticolo();
$post3->stampaArticolo();
$post4->stampaArticolo();
