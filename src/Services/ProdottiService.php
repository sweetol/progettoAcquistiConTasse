<?php
namespace App\Services;

use Symfony\Component\HttpFoundation\Response;
use App\Entity\Prodotti;
use App\Repository\ProdottiRepository;
use App\classes\ProdottoFactory;
use Symfony\Component\HttpFoundation\Request;
use Brick\Math\RoundingMode;
use Brick\Math\BigDecimal;

class ProdottiService
{

    public function __construct()
    {}
    
    public function getCatalogo(ProdottiRepository $prodottiRepository){
        $prodotti = $prodottiRepository->findAll();
        
        foreach($prodotti as $i => $prodotto ){
            $prodotti[$i] = ProdottoFactory::getProdotto($prodotto);
        }
        
        if (!$prodotti) {
            throw $this->createNotFoundException(
                'No product available '
                );
        }
        
        return $prodotti;
    }
    
    public function getProductsListAndPriceFromCookies(ProdottiRepository $prodottiRepository, Request $request){
        $totale = BigDecimal::of(0);
        $taxes = BigDecimal::of(0);
        
        $prodotti = array();
        
        $i=0;
        foreach($request->cookies as $id => $quantity ){
            $prodotti[$i] = ProdottoFactory::getProdotto(
                $prodottiRepository->find($id)
                );
            $prodotti[$i]->setQuantity($quantity);
            $totale = $totale->plus(BigDecimal::of($prodotti[$i]->getPrezzoNetto())->plus(BigDecimal::of($prodotti[$i]->getTax()))->multipliedBy($quantity));
            $taxes = $taxes->plus(BigDecimal::of($prodotti[$i]->getTax())->multipliedBy($quantity));
            $i++;
        }
        
        return array($prodotti, $totale, $taxes);
    }
}

