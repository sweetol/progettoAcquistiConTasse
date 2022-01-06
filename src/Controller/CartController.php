<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Prodotti;
use App\Repository\ProdottiRepository;
use App\classes\ProdottoFactory;
use Symfony\Component\HttpFoundation\Request;
use Brick\Math\RoundingMode;
use Brick\Math\BigDecimal;

class CartController extends AbstractController
{
    public function getCart(ProdottiRepository $prodottiRepository, Request $request): Response
    {
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
            
        return $this->render('cart.html3.twig', [
            'prodotti' => array_chunk($prodotti, 3),
            'total' => $totale,
            'taxes' => $taxes
        ]);
        
    }
}