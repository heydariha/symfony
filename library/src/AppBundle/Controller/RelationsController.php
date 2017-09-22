<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Book;


class RelationsController extends Controller
{
    /**
     * @Route("/genre/{genre_name}", name="genre")
     */
    public function genreAction(Request $request,$genre_name)
    {
		if(!$this->get('security.authorization_checker')->isGranted('ROLE_USER'))	return $this->redirect('login');

		
		$em = $this->getDoctrine()->getEntityManager();
		$query = $em->createQuery('SELECT b,r,g FROM AppBundle:Book b
													JOIN b.relation r
													JOIN r.genre g
													WHERE b.id = :bId')->setParameter('bId', $book_id);
// echo $query->getSql();exit;
		// $books = $query->getResult();
		$books = $query->getArrayResult();		
// echo "<pre>";print_r($books);exit;
		$data['books']	= $books;
		return $this->render('genre/genre.html.twig', $data);

    }
}
