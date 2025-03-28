<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;


#[Entity(repositoryClass: CustomerRepository::class)]
class Customer
{
    #[Id, GeneratedValue, Column(type: 'integer')]
    private int $id;

    #[Column(length: 25)]
    private ?string $businessAccount = null;

    #[Column(length: 25, nullable: true)]
    private ?string $eventAccount = null;

    #[Column(length: 25, nullable: true)]
    private ?string $lastEventAccount = null;

    #[Column(length: 8, nullable: true)]
    private ?string $cardNumber = null;

    #[Column(length: 4, nullable: true)]
    private ?string $civility = null;

    #[Column(length: 100, nullable: true)]
    private ?string $currentOwnerName = null;

    #[Column(length: 100, nullable: true)]
    private ?string $lastName = null;

    #[Column(length: 100, nullable: true)]
    private ?string $firstName = null;

    #[Column(length: 100, nullable: true)]
    private ?string $streetIdentity = null;

    #[Column(length: 100, nullable: true)]
    private ?string $additionnalAdress = null;

    #[Column(length: 8, nullable: true)]
    private ?string $zipCode = null;

    #[Column(length: 100, nullable: true)]
    private ?string $city = null;

    #[Column(length: 12, nullable: true)]
    private ?string $homePhone = null;

    #[Column(length: 12, nullable: true)]
    private ?string $mobilePhone = null;

    #[Column(length: 12, nullable: true)]
    private ?string $jobPhone = null;

    #[Column(length: 100, nullable: true)]
    private ?string $email = null;

    #[Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $releaseDate = null;

    #[Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $purchaseDate = null;

    #[Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lastEventDate = null;

    #[Column(length: 16, nullable: true)]
    private ?string $brandName = null;

    #[Column(length: 10, nullable: true)]
    private ?string $modelName = null;

    #[Column(length: 100, nullable: true)]
    private ?string $version = null;

    #[Column(length: 25, nullable: true)]
    private ?string $vin = null;

    #[Column(length: 10, nullable: true)]
    private ?string $registration = null;

    #[Column(length: 20, nullable: true)]
    private ?string $leadType = null;

    #[Column(nullable: true)]
    private ?int $mileage = null;

    #[Column(length: 20, nullable: true)]
    private ?string $engineName = null;

    #[Column(length: 20, nullable: true)]
    private ?string $seller = null;

    #[Column(length: 20, nullable: true)]
    private ?string $sellerVO = null;

    #[Column(length: 50, nullable: true)]
    private ?string $billingComment = null;

    #[Column(length: 4, nullable: true)]
    private ?string $vnvoType = null;

    #[Column(length: 20, nullable: true)]
    private ?string $vnvoNumber = null;

    #[Column(length: 20, nullable: true)]
    private ?string $intermediary = null;

    #[Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $eventDate = null;

    #[Column(length: 20, nullable: true)]
    private ?string $eventOrigin = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function getBusinessAccount(): ?string
    {
        return $this->businessAccount;
    }

    public function setBusinessAccount(string $businessAccount): self
    {
        $this->businessAccount = $businessAccount;

        return $this;
    }

    public function getEventAccount(): ?string
    {
        return $this->eventAccount;
    }

    public function setEventAccount(?string $eventAccount): self
    {
        $this->eventAccount = $eventAccount;

        return $this;
    }

    public function getLastEventAccount(): ?string
    {
        return $this->lastEventAccount;
    }

    public function setLastEventAccount(?string $lastEventAccount): self
    {
        $this->lastEventAccount = $lastEventAccount;

        return $this;
    }

    public function getCardNumber(): ?string
    {
        return $this->cardNumber;
    }

    public function setCardNumber(?string $cardNumber): self
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function getCivility(): ?string
    {
        return $this->civility;
    }

    public function setCivility(?string $civility): self
    {
        $this->civility = $civility;

        return $this;
    }

    public function getCurrentOwnerName(): ?string
    {
        return $this->currentOwnerName;
    }

    public function setCurrentOwnerName(?string $currentOwnerName): self
    {
        $this->currentOwnerName = $currentOwnerName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getStreetIdentity(): ?string
    {
        return $this->streetIdentity;
    }

    public function setStreetIdentity(?string $streetIdentity): self
    {
        $this->streetIdentity = $streetIdentity;

        return $this;
    }

    public function getAdditionnalAdress(): ?string
    {
        return $this->additionnalAdress;
    }

    public function setAdditionnalAdress(?string $additionnalAdress): self
    {
        $this->additionnalAdress = $additionnalAdress;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getHomePhone(): ?string
    {
        return $this->homePhone;
    }

    public function setHomePhone(?string $homePhone): self
    {
        $this->homePhone = $homePhone;

        return $this;
    }

    public function getMobilePhone(): ?string
    {
        return $this->mobilePhone;
    }

    public function setMobilePhone(?string $mobilePhone): self
    {
        $this->mobilePhone = $mobilePhone;

        return $this;
    }

    public function getJobPhone(): ?string
    {
        return $this->jobPhone;
    }

    public function setJobPhone(?string $jobPhone): self
    {
        $this->jobPhone = $jobPhone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(?\DateTimeInterface $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getPurchaseDate(): ?\DateTimeInterface
    {
        return $this->purchaseDate;
    }

    public function setPurchaseDate(?\DateTimeInterface $purchaseDate): self
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    public function getLastEventDate(): ?\DateTimeInterface
    {
        return $this->lastEventDate;
    }

    public function setLastEventDate(?\DateTimeInterface $lastEventDate): self
    {
        $this->lastEventDate = $lastEventDate;

        return $this;
    }

    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;

        return $this;
    }

    public function getModelName(): ?string
    {
        return $this->modelName;
    }

    public function setModelName(?string $modelName): self
    {
        $this->modelName = $modelName;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(?string $vin): self
    {
        $this->vin = $vin;

        return $this;
    }

    public function getRegistration(): ?string
    {
        return $this->registration;
    }

    public function setRegistration(?string $registration): self
    {
        $this->registration = $registration;

        return $this;
    }

    public function getLeadType(): ?string
    {
        return $this->leadType;
    }

    public function setLeadType(?string $leadType): self
    {
        $this->leadType = $leadType;

        return $this;
    }

    public function getMileage(): ?int
    {
        return $this->mileage;
    }

    public function setMileage(?int $mileage): self
    {
        $this->mileage = $mileage;

        return $this;
    }

    public function getEngineName(): ?string
    {
        return $this->engineName;
    }

    public function setEngineName(?string $engineName): self
    {
        $this->engineName = $engineName;

        return $this;
    }

    public function getSeller(): ?string
    {
        return $this->seller;
    }

    public function setSeller(?string $seller): self
    {
        $this->seller = $seller;

        return $this;
    }

    public function getSellerVO(): ?string
    {
        return $this->sellerVO;
    }

    public function setSellerVO(?string $sellerVO): self
    {
        $this->sellerVO = $sellerVO;

        return $this;
    }

    public function getBillingComment(): ?string
    {
        return $this->billingComment;
    }

    public function setBillingComment(?string $billingComment): self
    {
        $this->billingComment = $billingComment;

        return $this;
    }

    public function getVnvoType(): ?string
    {
        return $this->vnvoType;
    }

    public function setVnvoType(?string $vnvoType): self
    {
        $this->vnvoType = $vnvoType;

        return $this;
    }

    public function getVnvoNumber(): ?string
    {
        return $this->vnvoNumber;
    }

    public function setVnvoNumber(?string $vnvoNumber): self
    {
        $this->vnvoNumber = $vnvoNumber;

        return $this;
    }

    public function getIntermediary(): ?string
    {
        return $this->intermediary;
    }

    public function setIntermediary(?string $intermediary): self
    {
        $this->intermediary = $intermediary;

        return $this;
    }

    public function getEventDate(): ?\DateTimeInterface
    {
        return $this->eventDate;
    }

    public function setEventDate(?\DateTimeInterface $eventDate): self
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    public function getEventOrigin(): ?string
    {
        return $this->eventOrigin;
    }

    public function setEventOrigin(?string $eventOrigin): self
    {
        $this->eventOrigin = $eventOrigin;

        return $this;
    }
}
