<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role
{
    #[ORM\Id]
    #[ORM\GeneratedValue]

    #[ORM\Column(length: 20)]
    private ?string $responsabilite = null;



    public function getResponsabilite(): ?string
    {
        return $this->responsabilite;
    }

    public function setResponsabilite(string $responsabilite): self
    {
        $this->responsabilite = $responsabilite;

        return $this;
    }

    public function __toString(): string
    {
        return $this->responsabilite ?? ''; // Remplacez 'responsabilite' par la propriété que vous souhaitez afficher
    }
}
