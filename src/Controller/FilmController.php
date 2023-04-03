<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CommentRepository;
use App\Entity\Film;
use App\Repository\FilmRepository;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request; // Nous avons besoin d'accéder à la requête pour obtenir le numéro de page
use Knp\Component\Pager\PaginatorInterface; // Nous appelons le bundle KNP Paginator

class FilmController extends AbstractController
{
	private $twig;

	public function __construct(Environment $twig)
	{
		$this->twig = $twig;
	}

	#[Route('/film/{id}', name: 'film')]
	public function show(Film $film, CommentRepository $commentRepository): Response
	{
		$comments = $commentRepository->findBy(['film' => $film]);
		dump($comments);
		return new Response ($this->twig->render('film/show.html.twig', [
			'film' => $film,
			'comments' => $comments
		]));
	}
	 #[Route('/', name: 'home')]
    public function index(FilmRepository $filmRepository, PaginatorInterface $paginator,Request $request): Response
    {
    	$donnees = $filmRepository->findAll();
    	$films = $paginator->paginate(
    		$donnees, // les données à paginer (ici nos films)
   			$request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
    		6 // Nombre de résultats par page
		);

        return new Response ($this->twig->render('home/index.html.twig',[
        	'films' => $films,
        ]));
           
    }
}