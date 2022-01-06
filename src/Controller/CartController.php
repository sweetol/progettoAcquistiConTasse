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
use App\Services\ProdottiService;

class CartController extends AbstractController
{
    public function getCart(ProdottiRepository $prodottiRepository, Request $request, ProdottiService $prodottiService): Response
    {
        $result = $prodottiService->getProductsListAndPriceFromCookies($prodottiRepository, $request);
        
        return $this->render('cart.html3.twig', [
            'prodotti' => array_chunk($result[0], 3),
            'total' => $result[1],
            'taxes' => $result[2]
        ]);
        
    }
}