<?php

namespace App\Entity;

use App\Repository\MeasurementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MeasurementRepository::class)]
class Measurement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $measurement_id = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $device_id = null;

    #[ORM\Column(length: 255)]
    private ?string $date_time = null;

    #[ORM\Column(length: 255)]
    private ?string $measurement_type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMeasurementId(): ?string
    {
        return $this->measurement_id;
    }

    public function setMeasurementId(string $measurement_id): static
    {
        $this->measurement_id = $measurement_id;

        return $this;
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

    public function getDateTime(): ?string
    {
        return $this->date_time;
    }

    public function setDateTime(string $date_time): static
    {
        $this->date_time = $date_time;

        return $this;
    }

    public function getMeasurementType(): ?string
    {
        return $this->measurement_type;
    }

    public function setMeasurementType(string $measurement_type): static
    {
        $this->measurement_type = $measurement_type;

        return $this;
    }
}
