<?php
namespace App\classes;

interface ProdottoInterface
{
    public function getId(): ?int;
    public function getNome(): ?string;
    public function getDescrizione(): ?string;
    public function getPrezzoNetto(): ?float;
    public function getTax(): ?float;
    public function getQuantity(): ?int;
    public function setQuantity($quantity);
    public function getTotale(): ?float;
}

