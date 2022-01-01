<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CatalogoController extends AbstractController
{
    public function getCatalogo(): Response
    {
        $number = random_int(0, 100);
        
        return $this->render('catalogo.html2.twig', [
            'number' => $number,
        ]);
        
    }
}