<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Genre;


class GenreController extends Controller
{
    /**
     * @Route("/genre/{genre_name}", name="genre")
     */
    public function genreAction(Request $request,$genre_name)
    {
		if(!$this->get('security.authorization_checker')->isGranted('ROLE_USER'))	return $this->redirect('login');

		$userTypeId	= 0;
		if($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
			$userTypeId	= 1;
		else
		if($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
			$userTypeId	= 2;	
		
		$em = $this->getDoctrine()->getEntityManager();
		$query = $em->createQuery('SELECT g,r,b FROM AppBundle:Genre g
													JOIN g.relation r
													JOIN r.book b
													JOIN b.user_book ub
													WHERE g.gname = :bId AND ub.user = :userType')->setParameter('bId', $genre_name)->setParameter('userType', $userTypeId);
		$books = $query->getArrayResult();
// echo "<pre>";print_r($books);exit;

		$data['books']	= $books;
		return $this->render('genre/genre.html.twig', $data);

    }
}
