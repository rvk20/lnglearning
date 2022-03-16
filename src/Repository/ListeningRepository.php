<?php

namespace App\Repository;

use App\Entity\Listening;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Listening|null find($id, $lockMode = null, $lockVersion = null)
 * @method Listening|null findOneBy(array $criteria, array $orderBy = null)
 * @method Listening[]    findAll()
 * @method Listening[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListeningRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Listening::class);
    }

    // /**
    //  * @return Listening[] Returns an array of Listening objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Listening
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
