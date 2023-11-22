<?php

namespace App\DataFixtures;

use App\Entity\Oignon;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class OignonFixture extends Fixture
{
    private const OIGNON_REFERENCE = 'Oignon';

    public function load(ObjectManager $manager)
    {
        $typesOignons = [
            'Oignon rouge',
            'Oignon jaune',
            'Oignon blanc',
            'Oignon doux',
            'Oignon de printemps',
        ];

        foreach ($typesOignons as $key => $typeOignon) {
            $oignon = new Oignon();
            $oignon->setType($typeOignon);
            $manager->persist($oignon);
            $this->addReference(self::OIGNON_REFERENCE . '_' . $key, $oignon);
        }

        $manager->flush();
    }
}