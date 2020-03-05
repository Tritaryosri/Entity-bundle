<?php

namespace App\Repository;

use App\Entity\SalePoint;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SalePoint|null find($id, $lockMode = null, $lockVersion = null)
 * @method SalePoint|null findOneBy(array $criteria, array $orderBy = null)
 * @method SalePoint[]    findAll()
 * @method SalePoint[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SalePointRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SalePoint::class);
    }

    // /**
    //  * @return SalePoint[] Returns an array of SalePoint objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SalePoint
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
