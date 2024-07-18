<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    private ?string $lastName = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $salt = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(length: 255)]
    private ?string $city = null;

    #[ORM\Column(length: 255)]
    private ?string $postalCode = null;

    #[ORM\Column(length: 255)]
    private ?string $school = null;

    #[ORM\Column(length: 255)]
    private ?string $dateOfBirth = null;

    #[ORM\Column]
    private ?int $fine = null;

    #[ORM\Column]
    private ?int $dressNumber = null;

    #[ORM\Column(length: 255)]
    private ?string $authRole = null;

    #[ORM\Column(length: 255)]
    private ?string $phoneNumberPlayer = null;

    #[ORM\Column(length: 255)]
    private ?string $phoneNumberMother = null;

    #[ORM\Column(length: 255)]
    private ?string $phoneNumberFather = null;

    #[ORM\Column(length: 255)]
    private ?string $plainPassword = null;

    #[ORM\ManyToOne]
    #[ORM\Column(length: 255)]
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

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(string $salt): static
    {
        $this->salt = $salt;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): static
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getSchool(): ?string
    {
        return $this->school;
    }

    public function setSchool(string $school): static
    {
        $this->school = $school;

        return $this;
    }

    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth(string $dateOfBirth): static
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    public function getFine(): ?int
    {
        return $this->fine;
    }

    public function setFine(int $fine): static
    {
        $this->fine = $fine;

        return $this;
    }

    public function getDressNumber(): ?int
    {
        return $this->dressNumber;
    }

    public function setDressNumber(int $dressNumber): static
    {
        $this->dressNumber = $dressNumber;

        return $this;
    }

    public function getAuthRole(): ?string
    {
        return $this->authRole;
    }

    public function setAuthRole(string $authRole): static
    {
        $this->authRole = $authRole;

        return $this;
    }

    public function getPhoneNumberPlayer(): ?string
    {
        return $this->phoneNumberPlayer;
    }

    public function setPhoneNumberPlayer(string $phoneNumberPlayer): static
    {
        $this->phoneNumberPlayer = $phoneNumberPlayer;

        return $this;
    }

    public function getPhoneNumberMother(): ?string
    {
        return $this->phoneNumberMother;
    }

    public function setPhoneNumberMother(string $phoneNumberMother): static
    {
        $this->phoneNumberMother = $phoneNumberMother;

        return $this;
    }

    public function getPhoneNumberFather(): ?string
    {
        return $this->phoneNumberFather;
    }

    public function setPhoneNumberFather(string $phoneNumberFather): static
    {
        $this->phoneNumberFather = $phoneNumberFather;

        return $this;
    }

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(string $plainPassword): static
    {
        $this->plainPassword = $plainPassword;

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
