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
    name: 'app:list-films',
    description: 'Show the list of all the films.',
)]
class ListFilmsCommand extends Command
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
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $films = $this->filmRepository->findAll();
        if(!$films) {
            $output->writeln('<comment>no films found<comment>');
            exit(1);
        }
        
        foreach($films as $film)
        {
            $output->writeln($film);
        }
        
        return Command::SUCCESS;
        
    }
}
