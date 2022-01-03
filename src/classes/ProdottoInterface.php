<?php
namespace src\classes;

interface ProdottoInterface
{
    public function getNome(): ?string;
    public function getDescrizione(): ?string;
    public function getPrezzoNetto(): ?float;
    public function getTax(): ?float;
}

