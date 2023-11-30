<?php

namespace App\DataFixtures;

use App\Entity\Commentaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CommentaireFixtures extends Fixture
{
    private const COMMENTAIRE_REFERENCE = 'Commentaire';

    public function load(ObjectManager $manager)
    {
        $contenus = [
            'Super photo !',
            'Magnifique !',
            'Sublime !',
            'Succulent.',
        ];

        foreach ($contenus as $key => $contenu) {
            $commentaire = new Commentaire();
            $commentaire->setContenu($contenu);
            $manager->persist($commentaire);
            $this->addReference(self::COMMENTAIRE_REFERENCE . '_' . $key, $commentaire);
        }

        $manager->flush();
    }
}