<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\WordsLearned;


class WordsToLearn extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $product = new WordsLearned();
         $product->setLanguage('Angielski');
         $product->setUsersId(99);
         $product->setWord('elbow');

         $manager->persist($product);

        $manager->flush();
    }
}
