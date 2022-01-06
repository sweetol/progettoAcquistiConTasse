<?php
namespace App\classes;

use App\classes\ProdottoImportato;
use App\classes\ProdottoNonImportato;
use App\Entity\Prodotti;

class ProdottoFactory
{
    public static function getProdotto(Prodotti $prodotto): ?ProdottoInterface{

        if($prodotto->getImported()=='Y'){
            return new ProdottoImportato($prodotto);
        }else{
            return new ProdottoNonImportato($prodotto);          
        }
       
    }
    
}

