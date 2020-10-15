<?php

namespace App\Repository;

use App\Entity\FormularioMaleteo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FormularioMaleteo|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormularioMaleteo|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormularioMaleteo[]    findAll()
 * @method FormularioMaleteo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormularioMaleteoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FormularioMaleteo::class);
    }

    // /**
    //  * @return FormularioMaleteo[] Returns an array of FormularioMaleteo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FormularioMaleteo
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
