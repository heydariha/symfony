<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
		if($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
		{
			$userTypeId	= 0;
			if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
				$userTypeId	= 1;
			else
			if($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
				$userTypeId	= 2;			

		$em = $this->getDoctrine()->getEntityManager();
		$query = $em->createQuery('SELECT b,r,g FROM AppBundle:Book b
													JOIN b.relation r
													JOIN r.genre g
													JOIN b.user_book ub
													WHERE ub.user = :bId')->setParameter('bId', $userTypeId);
		$books = $query->getArrayResult();		
// echo "<pre>";print_r($books);exit;
			$data['books']	= $books;
			return $this->render('book/books.html.twig', $data);
		}
		else
		{
			return $this->redirect('login');
		}
    }
	
	
    /**
     * @Route("/book/{book_name}", name="book")
     */
    public function showDetails(Request $request,$book_name)
    {
		if(!$this->get('security.authorization_checker')->isGranted('ROLE_USER'))	return $this->redirect('login');

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
