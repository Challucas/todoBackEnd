<?php

namespace App\DataFixtures;

use App\Entity\Priority;
use App\Entity\Todo;
use App\Repository\PriorityRepository;
use App\Repository\TodoRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        $todo = Array();

        $priority = new Priority();

        for ($i = 0; $i < 50; $i++) {
            $todo[$i] = new Todo();
            $todo[$i]->setName($faker->name);
            $todo[$i]->setDescription('description '.$i);


            $manager->persist($todo[$i]);
       
        }

        $manager->flush();
    }
}
