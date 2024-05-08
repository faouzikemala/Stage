<?php

namespace App\Entity;

use App\Repository\DevicesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DevicesRepository::class)]
class Devices
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $device_id = null;

    #[ORM\Column(length: 255)]
    private ?string $device_name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $device_type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $device_location = null;

    #[ORM\Column(length: 255)]
    private ?string $device_attribut = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeviceId(): ?string
    {
        return $this->device_id;
    }

    public function setDeviceId(string $device_id): static
    {
        $this->device_id = $device_id;

        return $this;
    }

    public function getDeviceName(): ?string
    {
        return $this->device_name;
    }

    public function setDeviceName(string $device_name): static
    {
        $this->device_name = $device_name;

        return $this;
    }

    public function getDeviceType(): ?string
    {
        return $this->device_type;
    }

    public function setDeviceType(?string $device_type): static
    {
        $this->device_type = $device_type;

        return $this;
    }

    public function getDeviceLocation(): ?string
    {
        return $this->device_location;
    }

    public function setDeviceLocation(?string $device_location): static
    {
        $this->device_location = $device_location;

        return $this;
    }

    public function getDeviceAttribut(): ?string
    {
        return $this->device_attribut;
    }

    public function setDeviceAttribut(string $device_attribut): static
    {
        $this->device_attribut = $device_attribut;

        return $this;
    }
}
