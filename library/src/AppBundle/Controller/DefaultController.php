<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
		if($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
		{
			// $userManager		= $this->container->get('fos_user.user_manager');
			// $user					= $userManager->findUserByUsername($this->container->get('security.context')->getToken()->getUser());
			
			$user = $this->getUser();

// echo "<pre>";print_r($user);exit;
// echo ":".$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN');exit;
			$userId					= $user->getId();
			return $this->render('book/books.html.twig', ['base_dir' => "mirrravad"]);	
		}
		else
		{
			return $this->redirect('login');
		}
			
			
			
			
		
        // replace this example code with whatever you need
        // return $this->render('default/index.html.twig', ['base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,]);
    }
}
