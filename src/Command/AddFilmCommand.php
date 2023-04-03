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
use Doctrine\ORM\EntityManager;
use App\Entity\Film;


#[AsCommand(
    name: 'app:add-film',
    description: 'Add a short description for your command',
)]
class AddFilmCommand extends Command
{
    /**
     * @var EntityManager : gère les fonctions liées à la persistance
     */
    private $em;
    
    public function __construct(ContainerInterface $container)
    {
        parent::__construct();
        $this->em = $container->get('doctrine')->getManager();
    }
    
    protected function configure(): void
    {
        $this
        ->addArgument('title', InputArgument::REQUIRED, 'Title of the film (if spaces must be quoted)')
        ->addArgument('year', InputArgument::REQUIRED, 'Year of the film')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        //..récupération des arguments dans $title et $year
        $title= $input->getArgument('title');
        $year= $input->getArgument('year');
        // crée une instance en mémoire
        $film = new Film();
        $film->setTitle($title);
        $film->setYear($year);
        
        // marque l'instance comme "à sauvegarder" en base
        $this->em->persist($film);
        
        // génère les requêtes en base
        $this->em->flush();
        
        return Command::SUCCESS;
    }
 
}
