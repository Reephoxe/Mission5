<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Twig\Environment;


class TestController extends AbstractController
{
	private $twig;

	public function __construct(Environment $twig)
	{
		$this->twig = $twig;
	}

    #[Route('/test', name: 'app_test')]
    public function index(Request $request): Response
    {
    	$controller_name = "test";
    	 return new Response ($this->twig->render('test/index.html.twig',[
        	'controller_name' => $controller_name,
        ]));
    	

		
	}
}

