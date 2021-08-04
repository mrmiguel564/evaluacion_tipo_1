<?php

namespace App\Repository;

use App\Entity\Registros;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Registros|null find($id, $lockMode = null, $lockVersion = null)
 * @method Registros|null findOneBy(array $criteria, array $orderBy = null)
 * @method Registros[]    findAll()
 * @method Registros[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RegistrosRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Registros::class);
    }

    // /**
    //  * @return Registros[] Returns an array of Registros objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Registros
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
