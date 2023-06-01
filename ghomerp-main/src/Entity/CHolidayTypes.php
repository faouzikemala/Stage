<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * CHolidayTypes
 * @ApiResource()
 * @ORM\Table(name="c_holiday_types", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_holiday_types", columns={"code"})})
 * @ORM\Entity
 */
class CHolidayTypes
{
    /**
     * @var int
     *
     * @ORM\Column(name="rowid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rowid;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=16, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var int
     *
     * @ORM\Column(name="affect", type="integer", nullable=false)
     */
    private $affect;

    /**
     * @var int
     *
     * @ORM\Column(name="delay", type="integer", nullable=false)
     */
    private $delay;

    /**
     * @var float
     *
     * @ORM\Column(name="newByMonth", type="float", precision=8, scale=5, nullable=false, options={"default"="0.00000"})
     */
    private $newbymonth = 0.00000;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_country", type="integer", nullable=true)
     */
    private $fkCountry;

    /**
     * @var int|null
     *
     * @ORM\Column(name="active", type="integer", nullable=true, options={"default"="1"})
     */
    private $active = 1;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getAffect(): ?int
    {
        return $this->affect;
    }

    public function setAffect(int $affect): self
    {
        $this->affect = $affect;

        return $this;
    }

    public function getDelay(): ?int
    {
        return $this->delay;
    }

    public function setDelay(int $delay): self
    {
        $this->delay = $delay;

        return $this;
    }

    public function getNewbymonth(): ?float
    {
        return $this->newbymonth;
    }

    public function setNewbymonth(float $newbymonth): self
    {
        $this->newbymonth = $newbymonth;

        return $this;
    }

    public function getFkCountry(): ?int
    {
        return $this->fkCountry;
    }

    public function setFkCountry(?int $fkCountry): self
    {
        $this->fkCountry = $fkCountry;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(?int $active): self
    {
        $this->active = $active;

        return $this;
    }


}
