<?php

namespace App\Repository;

use App\Entity\Voucher;
use App\Entity\VoucherType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Voucher|null find($id, $lockMode = null, $lockVersion = null)
 * @method Voucher|null findOneBy(array $criteria, array $orderBy = null)
 * @method Voucher[]    findAll()
 * @method Voucher[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VoucherRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Voucher::class);
    }
    public function availableVoucherByType(VoucherType $type)
    {
        $qb = $this->createQueryBuilder('v')
            ->select('count(v.id)')
            ->leftJoin('v.voucherType','vt')
            ->where('vt = :type AND v.wallet IS NULL')
            ->setParameter('type',$type);
        return $qb->getQuery()->getSingleScalarResult();
    }

    // /**
    //  * @return Vocher[] Returns an array of Vocher objects
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
    public function findOneBySomeField($value): ?Vocher
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
