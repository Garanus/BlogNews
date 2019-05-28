<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class NewsRepository extends EntityRepository
{
    /**
     * @param array $params
     * @return \Doctrine\ORM\QueryBuilder
     */
    public function getQueryBuilder(array $params = array() ){

           $qb = $this->createQueryBuilder('n')
            ->select('n, c, t')
            ->leftJoin('n.category', 'c')
            ->leftJoin('n.tags', 't');

        if(!empty($params['status'])){
            if('published'== $params['status']) {
                $qb->where('n.publishedDate <= :currDate AND n.publishedDate IS NOT NULL')
                    ->setParameter('currDate', new \DateTime());
            }elseif('unpublished'== $params['status']) {
                $qb->where('n.publishedDate > :currDate OR n.publishedDate IS NULL')
                    ->setParameter('currDate', new \DateTime());
            }

            };

        if(!empty($params['orderBy'])){
            $orderDir = !empty($params['orderDir']) ? $params['orderDir'] : NULL;
            $qb->orderBy($params['orderBy'], $orderDir);
        }
        return $qb;
    }
}
