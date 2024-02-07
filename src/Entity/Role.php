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
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 14)]
    private ?string $responsabilite = null;


    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): ?int
    {
        return $this->id = $id;
    }

    public function getResponsabilite(): ?string
    {
        return $this->responsabilite;
    }

    public function setResponsabilite(string $responsabilite): static
    {
        $this->responsabilite = $responsabilite;

        return $this;
    }

}
