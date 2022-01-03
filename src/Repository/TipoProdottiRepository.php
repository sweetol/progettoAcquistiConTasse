<?php

namespace App\Repository;

use App\Entity\TipoProdotti;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TipoProdotti|null find($id, $lockMode = null, $lockVersion = null)
 * @method TipoProdotti|null findOneBy(array $criteria, array $orderBy = null)
 * @method TipoProdotti[]    findAll()
 * @method TipoProdotti[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TipoProdottiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TipoProdotti::class);
    }

    // /**
    //  * @return TipoProdotti[] Returns an array of TipoProdotti objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TipoProdotti
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
