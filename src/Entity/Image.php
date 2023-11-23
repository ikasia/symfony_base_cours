<?php

namespace App\Entity;

use App\Repository\ImageRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImageRepository::class)]
class Image
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[ORM\OneToOne(inversedBy: 'image')]
    private ?int $id = null;
 
    #[ORM\Column(length: 255)]
    private ?string $url = null;
 
    #[ORM\Column(length: 255)]
    private ?string $altText = null;

    public function setUrl(string $nom): void {
        $this->nom = $nom;
    }
    // #[ORM\OneToOne(targetEntity: Burger::class, inversedBy: 'image')]
    // private ?Burger $burger = null;
}