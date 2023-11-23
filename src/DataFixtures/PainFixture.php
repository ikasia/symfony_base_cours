<?php

namespace App\DataFixtures;

use App\Entity\Pain;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PainFixture extends Fixture
{
    private const PAIN_REFERENCE = 'Pain';

    public function load(ObjectManager $manager)
    {
        $typesPains = [
            'Pain complet',
            'Pain aux céréales',
            'Pain ciabatta',
            'Pain baguette',
            'Pain brioche',
            'Pain sans gluten',
        ];

        foreach ($typesPains as $key => $typePain) {
            $pain = new Pain();
            $pain->setNom($typePain);
            $manager->persist($pain);
            $this->addReference(self::PAIN_REFERENCE . '_' . $key, $pain);
        }

        $manager->flush();
    }
}