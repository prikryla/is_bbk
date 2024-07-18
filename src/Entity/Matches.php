<?php

namespace App\Entity;

use App\Repository\MatchesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatchesRepository::class)]
class Matches
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $homeTeam = null;

    #[ORM\Column(length: 255)]
    private ?string $awayTeam = null;

    #[ORM\Column(length: 255)]
    private ?string $matchTime = null;

    #[ORM\Column(length: 255)]
    private ?string $venueAddress = null;

    #[ORM\Column(length: 255)]
    private ?string $venueCity = null;

    #[ORM\Column(length: 255)]
    private ?string $venueArena = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getHomeTeam(): ?string
    {
        return $this->homeTeam;
    }

    public function setHomeTeam(string $homeTeam): static
    {
        $this->homeTeam = $homeTeam;

        return $this;
    }

    public function getAwayTeam(): ?string
    {
        return $this->awayTeam;
    }

    public function setAwayTeam(string $awayTeam): static
    {
        $this->awayTeam = $awayTeam;

        return $this;
    }

    public function getMatchTime(): ?string
    {
        return $this->matchTime;
    }

    public function setMatchTime(string $matchTime): static
    {
        $this->matchTime = $matchTime;

        return $this;
    }

    public function getVenueAddress(): ?string
    {
        return $this->venueAddress;
    }

    public function setVenueAddress(string $venueAddress): static
    {
        $this->venueAddress = $venueAddress;

        return $this;
    }

    public function getVenueCity(): ?string
    {
        return $this->venueCity;
    }

    public function setVenueCity(string $venueCity): static
    {
        $this->venueCity = $venueCity;

        return $this;
    }

    public function getVenueArena(): ?string
    {
        return $this->venueArena;
    }

    public function setVenueArena(string $venueArena): static
    {
        $this->venueArena = $venueArena;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;

        return $this;
    }
}
