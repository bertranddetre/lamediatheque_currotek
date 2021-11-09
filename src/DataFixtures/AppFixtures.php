<?php

namespace App\DataFixtures;

use App\Entity\Catalogue;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
                $faker = Factory::create('fr_FR');

                //créer 10 livres dans le catalogue
                for($i =1 ; $i<=10; $i ++)
                {
                    $catalogue = new Catalogue();
                    $catalogue->setTitre($faker->lexify())
                              ->setDescription( $faker->paragraph() )
                              ->setImage($faker->imageUrl('220','300', 'books'))
                              ->setAuteur($faker->lexify())
                              ->setGenre($faker->randomElement(['Histoire', 'Science fiction', 'Guides pratiques', 'Policier', 'Sciences','Droit et économie', 'manga']))
                              ->setDateParution($faker->dateTimeBetween('-6 months'))
                              ->setIsReserve(false)
                              ->setIsEmprunt(false);

                    $manager->persist($catalogue);
                }
        $manager->flush();
    }
}
