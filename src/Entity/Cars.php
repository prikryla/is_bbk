<?php

namespace App\Entity;

use App\Repository\CarsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarsRepository::class)]
class Cars
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $carName = null;

    #[ORM\Column(length: 255)]
    private ?string $carPlate = null;

    #[ORM\Column(length: 255)]
    private ?string $carDriverFirstName = null;

    #[ORM\Column(length: 255)]
    private ?string $carDriverLastName = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getCarName(): ?string
    {
        return $this->carName;
    }

    public function setCarName(string $carName): static
    {
        $this->carName = $carName;

        return $this;
    }

    public function getCarPlate(): ?string
    {
        return $this->carPlate;
    }

    public function setCarPlate(string $carPlate): static
    {
        $this->carPlate = $carPlate;

        return $this;
    }

    public function getCarDriverFirstName(): ?string
    {
        return $this->carDriverFirstName;
    }

    public function setCarDriverFirstName(string $carDriverFirstName): static
    {
        $this->carDriverFirstName = $carDriverFirstName;

        return $this;
    }

    public function getCarDriverLastName(): ?string
    {
        return $this->carDriverLastName;
    }

    public function setCarDriverLastName(string $carDriverLastName): static
    {
        $this->carDriverLastName = $carDriverLastName;

        return $this;
    }
}
