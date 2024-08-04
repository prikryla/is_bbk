<?php

namespace App\Entity;

use App\Repository\MatchesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MatchesRepository::class)]
class Matches
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $matchHomeTeam = null;

    #[ORM\Column(length: 255)]
    private ?string $matchAwayTeam = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $matchDate = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $matchTime = null;

    #[ORM\Column(length: 255)]
    private ?string $matchAddress = null;

    #[ORM\Column(length: 255)]
    private ?string $matchCity = null;

    #[ORM\Column(length: 255)]
    private ?string $matchVenue = null;

    #[ORM\ManyToOne(inversedBy: 'matches')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TeamCategory $matchCategory = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getMatchHomeTeam(): ?string
    {
        return $this->matchHomeTeam;
    }

    public function setMatchHomeTeam(string $matchHomeTeam): static
    {
        $this->matchHomeTeam = $matchHomeTeam;

        return $this;
    }

    public function getMatchAwayTeam(): ?string
    {
        return $this->matchAwayTeam;
    }

    public function setMatchAwayTeam(string $matchAwayTeam): static
    {
        $this->matchAwayTeam = $matchAwayTeam;

        return $this;
    }

    public function getMatchDate(): ?\DateTimeInterface
    {
        return $this->matchDate;
    }

    public function setMatchDate(\DateTimeInterface $matchDate): static
    {
        $this->matchDate = $matchDate;

        return $this;
    }

    public function getMatchTime(): ?\DateTimeInterface
    {
        return $this->matchTime;
    }

    public function setMatchTime(\DateTimeInterface $matchTime): static
    {
        $this->matchTime = $matchTime;

        return $this;
    }

    public function getMatchAddress(): ?string
    {
        return $this->matchAddress;
    }

    public function setMatchAddress(string $matchAddress): static
    {
        $this->matchAddress = $matchAddress;

        return $this;
    }

    public function getMatchCity(): ?string
    {
        return $this->matchCity;
    }

    public function setMatchCity(string $matchCity): static
    {
        $this->matchCity = $matchCity;

        return $this;
    }

    public function getMatchVenue(): ?string
    {
        return $this->matchVenue;
    }

    public function setMatchVenue(string $matchVenue): static
    {
        $this->matchVenue = $matchVenue;

        return $this;
    }

    public function getMatchCategory(): ?TeamCategory
    {
        return $this->matchCategory;
    }

    public function setMatchCategory(?TeamCategory $matchCategory): static
    {
        $this->matchCategory = $matchCategory;

        return $this;
    }
}
