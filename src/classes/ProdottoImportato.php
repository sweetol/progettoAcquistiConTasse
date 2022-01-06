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
            $taxValueDoubleDeciaml = $netto->multipliedBy($taxPercentage)->dividedBy(100,2,RoundingMode::HALF_UP);
            $taxValueSingleDecimal = $netto->multipliedBy($taxPercentage)->dividedBy(100,1,RoundingMode::HALF_UP);
            $difference = $taxValueDoubleDeciaml->minus($taxValueSingleDecimal);
            
            if($difference->compareTo(BigDecimal::of(0.5))==0){
                $taxValue = $taxValueDoubleDecimal;
            }else if($difference->compareTo(BigDecimal::zero())>0){
                $taxValue = $taxValueSingleDecimal->plus(BigDecimal::of(0.05));
            }else{
                $taxValue = $taxValueSingleDecimal;
            }
        }else{
            $taxValue = BigDecimal::of(0);
        }
        return  $taxValue->toFloat(); 
    }
        
}

