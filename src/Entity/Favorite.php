<?php

namespace App\Entity;

use App\Repository\FavoriteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FavoriteRepository::class)]
class Favorite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $favorite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFavorite(): ?string
    {
        return $this->favorite;
    }

    public function setFavorite(string $favorite): static
    {
        $this->favorite = $favorite;

        return $this;
    }
}
