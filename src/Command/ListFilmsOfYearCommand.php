<?php

namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Entity\Film;
use App\Repository\FilmRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;

#[AsCommand(
    name: 'app:list-films-of-year',
    description: 'Add a short description for your command',
)]
class ListFilmsOfYearCommand extends Command
{
    /**
     * @var FilmRepository
     */
    private $filmRepository;
    
    public function __construct(ContainerInterface $container)
    {
        parent::__construct();
        $this->filmRepository = $container->get('doctrine')->getManager()->getRepository(Film::class);
    }
    
    protected function configure(): void
    {
        $this
        ->addArgument('year', InputArgument::REQUIRED, 'Year of the film')
    
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $year = $input->getArgument('year');
        
        if($year && ! preg_match( '/^\d+$/', $year ) ) {
            $output->writeln('<error>first argument must be integer</error>');
            exit(2);
        }
        $film = $this->filmRepository->findBy(
            ['year' => $year],
            ['title' => 'ASC']);
            if(!$film) {
                $output->writeln('unknown film: ' .$year );
                exit(1);
            }
            
            
            foreach($film as $unfilm) {
                $output->writeln($unfilm);
            }
            return Command::SUCCESS;
    }
}
