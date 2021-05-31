<?php

namespace App\Repository;

use App\Entity\Sms;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sms|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sms|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sms[]    findAll()
 * @method Sms[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SmsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sms::class);
    }

    // /**
    //  * @return Sms[] Returns an array of Sms objects
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
    public function findOneBySomeField($value): ?Sms
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * Get sum of verbrauch 
     * I used CASE inside SUm statement because doctorine didnt work with normal sum
     */
    public function getSumOfVerbrauch($value): ?array
    {
        return $this->createQueryBuilder('s')
                    ->select('SUM(CASE s.verbrauch WHEN 1 THEN 1 ELSE 0 END) AS used,  
                                SUM(CASE s.verbrauch WHEN 0 THEN 1 ELSE 0 END) AS invalid,
                                SUM(CASE s.verbrauch WHEN 9 THEN 1 ELSE 0 END) AS appointment,
                                SUM(CASE s.verbrauch WHEN 8 THEN 1 ELSE 0 END) AS todo')
                    ->andWhere('s.rechnung = :val')
                    ->setParameter('val', $value)
                    ->getQuery()
                    ->getOneOrNullResult();
    }
}
