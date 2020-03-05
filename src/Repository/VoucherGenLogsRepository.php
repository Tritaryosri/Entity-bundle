<?php

namespace App\Repository;

use App\Entity\VoucherGenLogs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method VoucherGenLogs|null find($id, $lockMode = null, $lockVersion = null)
 * @method VoucherGenLogs|null findOneBy(array $criteria, array $orderBy = null)
 * @method VoucherGenLogs[]    findAll()
 * @method VoucherGenLogs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoucherGenLogsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VoucherGenLogs::class);
    }

    // /**
    //  * @return VoucherGenLogs[] Returns an array of VoucherGenLogs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?VoucherGenLogs
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
