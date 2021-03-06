<?php

namespace MDQ\QuestionBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * QaValiderRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class QaValiderRepository extends EntityRepository
{
	public function getQuestions($repAdmin, $diff, $dom1, $crit, $sens, $nbdeQ, $nbmin)
	{ 
		$qb = $this->createQueryBuilder('a');						
		$qb->where('a.id>0'); //c'est bateau, mais après ça me permet de mettre uniquement des andWhere et d'éviter trop de conditions.
		if($repAdmin==0){			
			$qb->andWhere('a.repAdmin = 0');
		}
		if($repAdmin==1){			
			$qb->andWhere('a.repAdmin>0')
				->andWhere('a.repAdmin<10');
		}
		if($repAdmin==2){			
			$qb->andWhere('a.repAdmin>10');
		}
		if($repAdmin==3){
			$qb->andWhere('a.retournee>0');
		}
		if($diff!=0){
			$qb->andWhere('a.diff = :diff')
			->setParameter('diff', $diff);	
		}
		if($dom1!="none"){
			$qb->andWhere('a.dom1 = :dom1')
			->setParameter('dom1', $dom1);
		}		
		$qb->orderBy('a.'.$crit, $sens)
			->setFirstResult($nbmin-1);
		if($nbdeQ!=0) {
			$qb->setMaxResults($nbdeQ);
		}
		
	  return $qb->getQuery()
				->getResult();
	}
	public function getnbQuestions($repAdmin, $diff, $dom1, $crit, $sens, $nbdeQ, $nbmin)
	{ 
		$qb = $this->createQueryBuilder('a');						
		$qb->where('a.id>0'); //c'est bateau, mais après ça me permet de mettre uniquement des andWhere et d'éviter trop de conditions.
		if($repAdmin==0){			
			$qb->andWhere('a.repAdmin = 0');	
		}
		if($repAdmin==1){			
			$qb->andWhere('a.repAdmin>0')
				->andWhere('a.repAdmin<10');
		}
		if($repAdmin==2){			
			$qb->andWhere('a.repAdmin>10');
		}
		if($repAdmin==3){
			$qb->andWhere('a.retournee>0');
		}
		if($diff!=0){
			$qb->andWhere('a.diff = :diff')
			->setParameter('diff', $diff);	
		}
		if($dom1!="none"){
			$qb->andWhere('a.dom1 = :dom1')
			->setParameter('dom1', $dom1);
		}		
		$qb->orderBy('a.'.$crit, $sens)
			->setFirstResult($nbmin-1);
		if($nbdeQ!=0) {
			$qb->setMaxResults($nbdeQ);
		}
		$qb2=$qb->getQuery()->getResult();
		$nbQ=count($qb2);
		return $nbQ;
	}
	public function recupQaval($userId)
	{
		$qb = $this->createQueryBuilder('q')
					->where('q.auteur=:userId')
					->setParameter('userId',$userId)
					->orderBy('q.id','DESC');
		return $qb->getQuery()
				->getResult();
	}
	public function nbQaval7j($userId)
	{	
		$intcontrol = new \DateInterval('P1W');// Définition d'un intervalle de 10 minutes
		$dateactu= new \DateTime();
		$date7j=$dateactu->sub($intcontrol);
		$qb = $this->createQueryBuilder('q')
					->where('q.auteur=:userId')
					->setParameter('userId',$userId)
					->andWhere('q.datecreate>:date7j')
					->setParameter(':date7j',$date7j);
		$qb2=$qb->getQuery()->getResult();
		$nbQ=count($qb2);
		return $nbQ;
	}
}
