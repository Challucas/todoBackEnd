<?php

namespace App\DataFixtures;
use App\Entity\Todo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
         // create 20 todos! Bam!
         for ($i = 0; $i < 50; $i++) {
            $todo = new Todo();
            $todo->setName('todo '.$i);
            $todo->setDescription(mt_rand(10, 100));
            $manager->persist($todo);
        }

        $manager->flush();
    }
}
