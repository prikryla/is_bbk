<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Types\UuidType;
use Symfony\Component\Uid\Uuid;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users
{
    #[ORM\Id]
    #[ORM\Column(type: UuidType::NAME, unique: true)]
    #[ORM\GeneratedValue(strategy: 'CUSTOM')]
    #[ORM\CustomIdGenerator(class: 'doctrine.uuid_generator')]
    private ?Uuid $id = null;

    #[ORM\Column(length: 255)]
    private ?string $userFirstName = null;

    #[ORM\Column(length: 255)]
    private ?string $userLastName = null;

    #[ORM\Column(length: 255)]
    private ?string $userEmail = null;

    #[ORM\Column(length: 255)]
    private ?string $userUsername = null;

    #[ORM\Column(length: 255)]
    private ?string $userPassword = null;

    #[ORM\Column(length: 255)]
    private ?string $userAddress = null;

    #[ORM\Column(length: 255)]
    private ?string $userCity = null;

    #[ORM\Column(length: 255)]
    private ?string $userPostalCode = null;

    #[ORM\Column(length: 255)]
    private ?string $userSchool = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $userDateOfBirth = null;

    #[ORM\Column]
    private ?int $userFines = null;

    #[ORM\Column]
    private ?int $userDressNumber = null;

    #[ORM\Column(length: 255)]
    private ?string $userAuthRole = null;

    #[ORM\Column(length: 255)]
    private ?string $userPhoneNumber = null;

    #[ORM\Column(length: 255)]
    private ?string $userPhoneNumberMother = null;

    #[ORM\Column(length: 255)]
    private ?string $userPhoneNumberFather = null;

    #[ORM\ManyToOne(inversedBy: 'users')]
    private ?TeamCategory $userCategory = null;

    public function getId(): ?Uuid
    {
        return $this->id;
    }

    public function setId(Uuid $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getUserFirstName(): ?string
    {
        return $this->userFirstName;
    }

    public function setUserFirstName(string $userFirstName): static
    {
        $this->userFirstName = $userFirstName;

        return $this;
    }

    public function getUserLastName(): ?string
    {
        return $this->userLastName;
    }

    public function setUserLastName(string $userLastName): static
    {
        $this->userLastName = $userLastName;

        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    public function setUserEmail(string $userEmail): static
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    public function getUserUsername(): ?string
    {
        return $this->userUsername;
    }

    public function setUserUsername(string $userUsername): static
    {
        $this->userUsername = $userUsername;

        return $this;
    }

    public function getUserPassword(): ?string
    {
        return $this->userPassword;
    }

    public function setUserPassword(string $userPassword): static
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    public function getUserAddress(): ?string
    {
        return $this->userAddress;
    }

    public function setUserAddress(string $userAddress): static
    {
        $this->userAddress = $userAddress;

        return $this;
    }

    public function getUserCity(): ?string
    {
        return $this->userCity;
    }

    public function setUserCity(string $userCity): static
    {
        $this->userCity = $userCity;

        return $this;
    }

    public function getUserPostalCode(): ?string
    {
        return $this->userPostalCode;
    }

    public function setUserPostalCode(string $userPostalCode): static
    {
        $this->userPostalCode = $userPostalCode;

        return $this;
    }

    public function getUserSchool(): ?string
    {
        return $this->userSchool;
    }

    public function setUserSchool(string $userSchool): static
    {
        $this->userSchool = $userSchool;

        return $this;
    }

    public function getUserDateOfBirth(): ?\DateTimeInterface
    {
        return $this->userDateOfBirth;
    }

    public function setUserDateOfBirth(\DateTimeInterface $userDateOfBirth): static
    {
        $this->userDateOfBirth = $userDateOfBirth;

        return $this;
    }

    public function getUserFines(): ?int
    {
        return $this->userFines;
    }

    public function setUserFines(int $userFines): static
    {
        $this->userFines = $userFines;

        return $this;
    }

    public function getUserDressNumber(): ?int
    {
        return $this->userDressNumber;
    }

    public function setUserDressNumber(int $userDressNumber): static
    {
        $this->userDressNumber = $userDressNumber;

        return $this;
    }

    public function getUserAuthRole(): ?string
    {
        return $this->userAuthRole;
    }

    public function setUserAuthRole(string $userAuthRole): static
    {
        $this->userAuthRole = $userAuthRole;

        return $this;
    }

    public function getUserPhoneNumber(): ?string
    {
        return $this->userPhoneNumber;
    }

    public function setUserPhoneNumber(string $userPhoneNumber): static
    {
        $this->userPhoneNumber = $userPhoneNumber;

        return $this;
    }

    public function getUserPhoneNumberMother(): ?string
    {
        return $this->userPhoneNumberMother;
    }

    public function setUserPhoneNumberMother(string $userPhoneNumberMother): static
    {
        $this->userPhoneNumberMother = $userPhoneNumberMother;

        return $this;
    }

    public function getUserPhoneNumberFather(): ?string
    {
        return $this->userPhoneNumberFather;
    }

    public function setUserPhoneNumberFather(string $userPhoneNumberFather): static
    {
        $this->userPhoneNumberFather = $userPhoneNumberFather;

        return $this;
    }

    public function getUserCategory(): ?TeamCategory
    {
        return $this->userCategory;
    }

    public function setUserCategory(?TeamCategory $userCategory): static
    {
        $this->userCategory = $userCategory;

        return $this;
    }
}
