<?php
/**
 * Created by PhpStorm.
 * User: ismail
 * Date: 05.03.18
 * Time: 11:32
 */

namespace Tyre\TyreBundle\Repository;


class DoctrineProductRepository implements ProductRepositoryInterface
{
    public function __constructor(EntityManager $em)
    {
        $this->em = $em;
    }

    public function search(string $needle)
    {
        $repository = $this->em->getRepository('TyreTyreBundle:Products');
        $query = $repository->createQueryBuilder('product')
            ->where("product.name LIKE '%".$needle."%' or product.manufacturer LIKE '%".$needle."%'")
            ->getQuery();
        return $query->getArrayResult();
    }

}