<?php
class Manzano
{
    private $manzanas = [];

    public function getManzanas()
    {
        return $this->manzanas;
    }
}

class ContadorDeManzanas
{
    private $manzano;

    //there was a typo on this method (__contsruct)
    public function __construct(Manzano $manzano)
    {
        $this->manzano = $manzano;
    }

    public function cuantas()
    {
        return count($this->manzano->getManzanas());
    }
}
?>