<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/loginTest", name="Login")
     */
    public function indexAction(Request $request)
    {
        return $this->render('general/login.html.twig', ['base_dir' => "mire"]);
    }
}
