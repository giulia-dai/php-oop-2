<?php
class Categoria
{
    public $titolo;
    public $icona;
    function __construct(string $titolo, string $icona)
    {
        $this->titolo = $titolo;
        $this->icona = $icona;
    }
    public function getIcon()
    {
        return $this->icona;
    }
}
