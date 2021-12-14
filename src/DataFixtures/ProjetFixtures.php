<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Projet;
use App\Entity\Category;

class ProjetFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        // $faker = Faker\Factory::create('FR_fr');

        for($i = 1; $i <= 10; $i++){
            $projet = new Projet;
            $projet->setTitle("Titre du projet n°$i")
                   ->setDescription("<p>Description de mon projet n°$i<p>")
                   ->setImage("http://placehold.it/350x150")
                   ->setGithub("<a>https://github.com/</a>")
                   ->setWeblink("<a>Lien du site</a>")
                   ->setCreatedAt(new \DateTimeImmutable());

                   $manager->persist($projet);
        }

        $manager->flush();
    }
}
