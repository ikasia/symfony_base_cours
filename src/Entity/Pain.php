<?php

namespace App\Entity;

use App\Repository\PainRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PainRepository::class)]
class Pain
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    public function getId(): ?int {
        return $this->id;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }
}
