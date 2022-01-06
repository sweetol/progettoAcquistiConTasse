<?php
namespace App\classes;

use App\classes\ProdottoInterface;
use App\Entity\Prodotti;
use Brick\Math\RoundingMode;
use Brick\Math\BigDecimal;

class ProdottoImportato implements ProdottoInterface
{
    private Prodotti $prodotto;
    private float $importTax = 5;
    
    public function __construct(Prodotti $prodotto)
    {
        $this->prodotto = $prodotto;
    }
    
    public function getId(): ?int{
        return $this->prodotto->getId();
    }
    
    public function getNome(): ?string{
        return $this->prodotto->getNome()." (imported)";
    }
    
    public function getDescrizione(): ?string{
        return $this->prodotto->getDescrizione();
    }
    
    public function getPrezzoNetto(): ?float{
        return $this->prodotto->getPrezzoLordo();
    }
    
    public function getQuantity(): ?int{
        return $this->quantity;
    }
    
    public function getTotale(): ?float{
        return BigDecimal::of($this->getPrezzoNetto())->plus(BigDecimal::of($this->getTax()))->multipliedBy($this->getQuantity())->toFloat();
    }
    
    public function setQuantity($quantity){
        if(intval($quantity)!=0){
            $this->quantity = $quantity;
        }
    }
    
    public function getTax(): ?float{
        $netto = BigDecimal::of($this->getPrezzoNetto());
        $taxPercentage = $this->prodotto->getTipoProdotto()->getTax() + $this->importTax;
        if($taxPercentage>0){
            $taxValue = $netto->multipliedBy($taxPercentage)->dividedBy(100,2,RoundingMode::HALF_UP);
        }else{
            $taxValue = BigDecimal::of(0);
        }
        return  $taxValue->toFloat(); 
    }
        
}

