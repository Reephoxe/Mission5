<?php
namespace App\DataFixtures;
use App\Entity\Film;
use App\Repository\FilmRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Comment;
class AppFixtures extends Fixture
{
    /**
     * Generates initialization data for films : [title, year]
     * @return \\Generator
     */
    private static function filmsDataGenerator()
    {
        yield ["Babylon", 1980];
        yield ["Babylon", 2023];
        yield ["E. T.", 2003];
        yield ["Lupin", 2021];
        yield ["Le prénom", 2012];
        yield ["Tirailleurs", 2022];
        yield ["Avatar", 2009];
        yield ["Avatar 2", 2022];
    }
    /**
     * Generates initialization data for film comments :
     * [film_title, film_year, comments]
     * @return \\Generator
     */
    private static function filmCommentsGenerator()
    {
        yield ["Babylon", 1980, "Balade sociale et musicale dans la banlieue anglaise des années 70", new \DateTimeImmutable('2021-11-07')];
        yield ["Babylon", 2023, "Un film magistral, cruel, flamboyant.", new \DateTimeImmutable('2023-03-07')];
        yield ["Babylon", 2023, "Démesuré, renversant, Babylon est un bordel virtuose", new \DateTimeImmutable('2023-04-17')];
        yield ["Lupin", 2021, " Omar Sy insuffle une nouvelle vie à un personnage littéraire", new \DateTimeImmutable('2022-01-03')];
        yield ["Lupin", 2021, "Netflix modernise intelligemment le mythe d’Arsène Lupin", new \DateTimeImmutable('2021-12-15')];
        yield ["Tirailleurs", 2022, "un tribut à des héros de l’ombre.", new \DateTimeImmutable('2022-05-07')];
        yield ["Tirailleurs", 2022, "Un mémorial subtil et magnifique.", new \DateTimeImmutable('2022-06-18')];
        yield ["Avatar ", 2009, "Une création exceptionnelle, un grand spectacle !", new \DateTimeImmutable('2010-03-03')];
        yield ["Avatar 2", 2022, "Spectacle familial hyperimmersif", new \DateTimeImmutable('2022-11-08')];
        yield ["Avatar 2", 2022, "Un conte humaniste et un très grand spectacle familial.", new \DateTimeImmutable('2022-11-08')];
    }
    
    public function load(ObjectManager $manager)
    {
        $filmRepo = $manager->getRepository(Film::class);
        
        foreach (self::filmsDataGenerator() as [$title, $year] ) {
            $film = new Film();
            $film->setTitle($title);
            $film->setYear($year);
            $manager->persist($film);
        }
        $manager->flush();
        
        foreach (self::filmCommentsGenerator() as [$title, $year, $comment, $createdAt])
        {
            $film = $filmRepo->findOneBy(['title' => $title, 'year' => $year]);
            $reco = new Comment();
            $reco->setComment($comment);
            $reco->setCreatedAt($createdAt);
            $film->addComment($reco);
            //the cascade persist on film-comments avoids persisting down the relation
            $manager->persist($film);
        }
        $manager->flush();
    }
}
