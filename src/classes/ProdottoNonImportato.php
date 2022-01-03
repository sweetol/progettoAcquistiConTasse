<?php
namespace src\classes;

use ProdottoInterface;
use src\Prodotti;

class ProdottoImportato implements ProdottoInterface
{
    private Prodotti $prodotto;
    
    public function __construct(Prodotti $prodotto)
    {
        $this->prodotto = $prodotto;
    }
    
    public function getNome(): ?string{
        return $this->prodotto->getNome();
    }
    
    public function getDescrizione(): ?string{
        return $this->prodotto->getDescrizione();
    }
    
    public function getPrezzoLordo(): ?float{
        return $this->prodotto->getPrezzoLordo();
    }
    
    
    public function getTax(): ?float{
        
    }
        
}

