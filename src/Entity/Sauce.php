<?php

namespace App\Entity;

use App\Repository\SauceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SauceRepository::class)]
class Sauce
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
 
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    #[ORM\ManyToMany(targetEntity: Burger::class, inversedBy: 'sauce')]
    private ?Burger $burger = null;
}