<?php

namespace App\Entity;

use App\Repository\ReservationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationsRepository::class)]
class Reservations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?\DateTime $dateReservation = null;

    #[ORM\Column]
    private ?int $nombreTables = null;

    #[ORM\Column]
    private ?int $typeTable = null;

    #[ORM\Column(length: 50)]
    private ?string $etat = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateReservation(): ?\DateTime
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTime $dateReservation): static
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    public function getNombreTables(): ?int
    {
        return $this->nombreTables;
    }

    public function setNombreTables(int $nombreTables): static
    {
        $this->nombreTables = $nombreTables;

        return $this;
    }

    public function getTypeTable(): ?int
    {
        return $this->typeTable;
    }

    public function setTypeTable(int $typeTable): static
    {
        $this->typeTable = $typeTable;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }
}
