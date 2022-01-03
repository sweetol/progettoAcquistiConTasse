<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Prodotti;
use App\Repository\ProdottiRepository;

class CatalogoController extends AbstractController
{
    public function getCatalogo(ProdottiRepository $prodottiRepository): Response
    {
        $prodotti = $prodottiRepository->findAll();
        
        if (!$prodotti) {
            throw $this->createNotFoundException(
                'No product available '
                );
        }
        
        return $this->render('catalogo.html2.twig', [
            'prodotti' => $prodotti,
        ]);
        
    }
}