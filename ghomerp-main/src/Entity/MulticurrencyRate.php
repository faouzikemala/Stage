<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MulticurrencyRate
 *
 * @ORM\Table(name="multicurrency_rate")
 * @ORM\Entity
 */
class MulticurrencyRate
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_sync", type="datetime", nullable=true)
     */
    private $dateSync;

    /**
     * @var float
     *
     * @ORM\Column(name="rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $rate = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_multicurrency", type="integer", nullable=false)
     */
    private $fkMulticurrency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="entity", type="integer", nullable=true, options={"default"="1"})
     */
    private $entity = 1;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getDateSync(): ?\DateTimeInterface
    {
        return $this->dateSync;
    }

    public function setDateSync(?\DateTimeInterface $dateSync): self
    {
        $this->dateSync = $dateSync;

        return $this;
    }

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }

    public function getFkMulticurrency(): ?int
    {
        return $this->fkMulticurrency;
    }

    public function setFkMulticurrency(int $fkMulticurrency): self
    {
        $this->fkMulticurrency = $fkMulticurrency;

        return $this;
    }

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(?int $entity): self
    {
        $this->entity = $entity;

        return $this;
    }


}
