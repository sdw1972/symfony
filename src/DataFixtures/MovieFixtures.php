<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $movie = new Movie();
       $movie->setTitle('The Dark Night');
       $movie->setReleaseYear('2008');
       $movie->setDescription('This is a description of the dark night');
       $movie->setImagePath('https://cdn.pixabay.com/photo/2021/06/18/11/24/batman-6345922_960_720.jpg');
       $movie->addActor($this->getReference('actor_1'));
       $movie->addActor($this->getReference('actor_2'));
       $manager->persist($movie);

       $movie2 = new Movie();
       $movie2->setTitle('Avengers : Endgame');
       $movie2->setReleaseYear('2019');
       $movie2->setDescription('This is a description of the Avengers : Endgame');
       $movie2->setImagePath('https://cdn.pixabay.com/photo/2019/11/30/00/27/capitanamerica-4662342_960_720.png');
       $movie2->addActor($this->getReference('actor_3'));
       $movie2->addActor($this->getReference('actor_4'));
       $manager->persist($movie2);

       $manager->flush();
    }
}
