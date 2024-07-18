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
    private ?string $car_name = null;

    #[ORM\Column(length: 255)]
    private ?string $plateNumber = null;

    #[ORM\Column(length: 255)]
    private ?string $driverFirstName = null;

    #[ORM\Column(length: 255)]
    private ?string $driverLastName = null;

    #[ORM\Column(length: 255)]
    private ?string $driverAddress = null;

    #[ORM\Column(length: 255)]
    private ?string $driverCity = null;

    #[ORM\Column(length: 255)]
    private ?string $driverPsc = null;

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
        return $this->car_name;
    }

    public function setCarName(string $car_name): static
    {
        $this->car_name = $car_name;

        return $this;
    }

    public function getPlateNumber(): ?string
    {
        return $this->plateNumber;
    }

    public function setPlateNumber(string $plateNumber): static
    {
        $this->plateNumber = $plateNumber;

        return $this;
    }

    public function getDriverFirstName(): ?string
    {
        return $this->driverFirstName;
    }

    public function setDriverFirstName(string $driverFirstName): static
    {
        $this->driverFirstName = $driverFirstName;

        return $this;
    }

    public function getDriverLastName(): ?string
    {
        return $this->driverLastName;
    }

    public function setDriverLastName(string $driverLastName): static
    {
        $this->driverLastName = $driverLastName;

        return $this;
    }

    public function getDriverAddress(): ?string
    {
        return $this->driverAddress;
    }

    public function setDriverAddress(string $driverAddress): static
    {
        $this->driverAddress = $driverAddress;

        return $this;
    }

    public function getDriverCity(): ?string
    {
        return $this->driverCity;
    }

    public function setDriverCity(string $driverCity): static
    {
        $this->driverCity = $driverCity;

        return $this;
    }

    public function getDriverPsc(): ?string
    {
        return $this->driverPsc;
    }

    public function setDriverPsc(string $driverPsc): static
    {
        $this->driverPsc = $driverPsc;

        return $this;
    }
}
