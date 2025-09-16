<?php

namespace App\Entity;

use App\Repository\RestaurantRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RestaurantRepository::class)]
class Restaurant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $menu = null;

    #[ORM\Column]
    private ?int $nombreTableLibres = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getMenu(): ?string
    {
        return $this->menu;
    }

    public function setMenu(string $menu): static
    {
        $this->menu = $menu;

        return $this;
    }

    public function getNombreTableLibres(): ?int
    {
        return $this->nombreTableLibres;
    }

    public function setNombreTableLibres(int $nombreTableLibres): static
    {
        $this->nombreTableLibres = $nombreTableLibres;

        return $this;
    }
}
