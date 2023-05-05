<?php
class Prodotto
{
    public $img;
    public $nome;
    public $prezzo;
    public $categoria;
    function __construct(string $img, string $nome, int $prezzo, Categoria $categoria)
    {
        $this->img = $img;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
    }
}
