<?php
namespace App\Services;

use Symfony\Component\HttpFoundation\Response;
use App\Entity\Prodotti;
use App\Repository\ProdottiRepository;
use App\classes\ProdottoFactory;
use Symfony\Component\HttpFoundation\Request;
use Brick\Math\RoundingMode;
use Brick\Math\BigDecimal;
use Psr\Log\LoggerInterface;

class ProdottiService
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    
    public function getCatalogo(ProdottiRepository $prodottiRepository){
        $prodotti = $prodottiRepository->findAll();
        
        foreach($prodotti as $i => $prodotto ){
            $this->logger->debug('trovato prodotto ' .$prodotto->getNome());
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
            
            $this->logger->debug('trovato prodotto tra i cookies: ' .$prodotti[$i]->getNome());
            $prodotti[$i]->setQuantity($quantity);
            $this->logger->debug('quantità ' .$quantity);
            $totale = $totale->plus(BigDecimal::of($prodotti[$i]->getPrezzoNetto())->plus(BigDecimal::of($prodotti[$i]->getTax()))->multipliedBy($quantity));
            $this->logger->debug('totale ' .$totale);
            $taxes = $taxes->plus(BigDecimal::of($prodotti[$i]->getTax())->multipliedBy($quantity));
            $this->logger->debug('tasse ' .$taxes);
            $i++;
        }
        
        return array($prodotti, $totale, $taxes);
    }
}

