<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Prodotti;
use App\Repository\ProdottiRepository;
use App\classes\ProdottoFactory;

use App\Services\ProdottiService;

class CatalogoController extends AbstractController
{
    public function getCatalogo(ProdottiRepository $prodottiRepository, ProdottiService $prodottiService): Response
    {
        return $this->render('catalogo.html2.twig', [
            'prodotti' => array_chunk($prodottiService->getCatalogo($prodottiRepository), 3)
        ]);
        
    }
}