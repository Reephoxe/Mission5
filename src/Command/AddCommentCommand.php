<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\ContainerInterface;
use App\Entity\Film;
use App\Entity\Comment;
use App\Repository\FilmRepository;
use Doctrine\ORM\EntityManager;


#[AsCommand(
    name: 'app:add-comment',
    description: 'Add a short description for your command',
)]
class AddCommentCommand extends Command
{
    /**
     * @var FilmRepository
     */
    private $filmRepository;
    
    /**
     * @var EntityManager : gère les fonctions liées à la persistance
     */
    private $em;
    
    public function __construct(ContainerInterface $container)
    {
        parent::__construct();
        $this->filmRepository = $container->get('doctrine')->getManager()->getRepository(Film::class);
        $this->em = $container->get('doctrine')->getManager();
    }
    
    protected function configure(): void
    {
        $this
        ->addArgument('title', InputArgument::REQUIRED, 'Title of the film (if spaces must be quoted)')
        ->addArgument('year', InputArgument::REQUIRED, 'Year of the film')
        ->addArgument('comment', InputArgument::REQUIRED, 'Comment of the film')
        
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
       $title = $input->getArguments('title');
       $year = $input->getArgument('year');
       $text = $input->getArgument('comment');
       
       // Chargement en mémoire d'un film existant dans la base
       $film = $this->filmRepository->findOneBy([
           'year' => $year,
           'title' => $title
       ]);
           
           // Création d'une instance de Comment en mémoire
           $comment = new Comment();
           $comment ->setComment($text);
           
           // Ajout en mémoire dans la collection des commentaires de ce film
           $film->addComment($comment);
           
           $this->em->persist($film);
           $this->em->flush();
           
           return Command::SUCCESS;
    }
}
