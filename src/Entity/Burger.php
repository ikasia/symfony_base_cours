<?php

namespace App\Entity;

use App\Repository\BurgerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BurgerRepository::class)]
class Burger{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
 
    #[ORM\Column(length: 255)]
    private ?string $nom = null;
 
    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Image $image = null;

    #[ORM\ManyToMany(targetEntity: Sauce::class, mappedBy: 'burger')]
    private ?Sauce $sauce = null;

    #[ORM\OneToMany(targetEntity: Pain::class, mappedBy: 'burger')]
    private ?Pain $pain = null;

    #[ORM\ManyToMany(targetEntity: Oignon::class, mappedBy: 'burger')]
    private ?Oignon $oignon = null;

    #[ORM\OneToOne(targetEntity: Commentaire::class, mappedBy: 'burger')]
    private ?Commentaire $commentaire = null;

}
