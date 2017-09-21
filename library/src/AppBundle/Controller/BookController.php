<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookController extends Controller
{
    /**
     * @Route("/bk", name="books")
     */
    public function indexAction(Request $request)
    {
		if(!$this->get('security.authorization_checker')->isGranted('ROLE_USER'))
			return $this->redirect('login');
        return $this->render('book/books.html.twig', ['base_dir' => "mire"]);
    }
}
