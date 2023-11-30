<?php

namespace App\DataFixtures;

use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ImageFixtures extends Fixture
{
    private const IMAGE_REFERENCE = 'Image';

    public function load(ObjectManager $manager)
    {
        $urls = [
            'https://tinyurl.com/3hevr2d6',
            'https://tinyurl.com/37rjdcs9',
            'https://tinyurl.com/mr3jtnp5'
        ];

        foreach ($urls as $key => $url) {
            $image = new Image();
            $image->setUrl($url);
            $manager->persist($image);
            $this->addReference(self::IMAGE_REFERENCE . '_' . $key, $image);
        }

        $manager->flush();
    }
}