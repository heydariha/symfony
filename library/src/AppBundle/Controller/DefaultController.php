<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//use Doctrine\ORM\Query\ResultSetMapping;//$this->_em->createNativeQuery('SELECT * FROM user WHERE', $page);
// use Doctrine\DBAL\DriverManager;
// use Doctrine\DBAL\Connection;

class DefaultController extends Controller
{	
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request , $page=0 , $rows =0 )
    {
		if($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
		{
			$userTypeId	= 0;
			if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
				$userTypeId	= 1;
			else
			if($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
				$userTypeId	= 2;
				
			$maxRow			= $rows > 0 ? $rows : $this->container->getParameter('num_items');
			$em = $this->getDoctrine()->getEntityManager();
			$qb = $em->createQueryBuilder();
			$qb->select('b,r,g,group_concat(g.gname) AS gname,ub')
					->from('AppBundle:Book', 'b')
					->innerJoin('b.relation', 'r')
					->innerJoin('r.genre', 'g')
					->innerJoin('b.user_book', 'ub')
					// ->innerJoin('ub.user', 'u')
					->where('ub.user = :userType')
					->orderBy('b.id', 'ASC')
					->groupBy('b.id')
					->setFirstResult( intval($page*$maxRow) )
					->setMaxResults( $maxRow )
					->setParameter('userType', $userTypeId);
			// echo $qb->getDql();exit; 
			$query	= $qb->getQuery();
			$array	= $query->getArrayResult();
			$data['books']			= $array;
			$data['prev']				= $page-1;
			$data['next']				= (count($array)< $maxRow ) ? '-1' : $page+1;
			$data['num_items']		= $maxRow;
			return $this->render('book/books.html.twig', $data);
		}
		else
		{
			return $this->redirect('login');
		}
    }
	
    /**
     * @Route("/more", name="loadMore")
     */
    public function moreAction(Request $request)
	{
		return $this->indexAction($request , 0,10);
	}	
	
    /**
     * @Route("/pager{page_no}", name="pager")
     */
    public function pagerAction(Request $request,$page_no)
	{
		return $this->indexAction($request , $page_no);
	}
	
    /**
     * @Route("/book/{book_name}", name="book")
     */
    public function showDetails(Request $request,$book_name)
    {
		if(!$this->get('security.authorization_checker')->isGranted('ROLE_USER'))	return $this->redirect('../login');

		$em = $this->getDoctrine()->getEntityManager();
		$query = $em->createQuery('SELECT b,r,g,ub,u FROM AppBundle:Book b
													JOIN b.relation r
													JOIN r.genre g
													JOIN b.user_book ub
													JOIN ub.user u
													WHERE b.bname = :bId')->setParameter('bId', $book_name);
		$books = $query->getArrayResult();		
// echo "<pre>";print_r($books);exit;
		$data['books']	= $books;
		return $this->render('book/detail.html.twig', $data);
    }
}
