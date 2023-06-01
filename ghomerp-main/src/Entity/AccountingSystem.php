<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AccountingSystem
 *
 * @ORM\Table(name="accounting_system", uniqueConstraints={@ORM\UniqueConstraint(name="uk_accounting_system_pcg_version", columns={"pcg_version"})})
 * @ORM\Entity
 */
class AccountingSystem
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
     * @var int|null
     *
     * @ORM\Column(name="fk_country", type="integer", nullable=true)
     */
    private $fkCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="pcg_version", type="string", length=32, nullable=false)
     */
    private $pcgVersion;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=128, nullable=false)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="active", type="smallint", nullable=true)
     */
    private $active = '0';

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function getPcgVersion(): ?string
    {
        return $this->pcgVersion;
    }

    public function setPcgVersion(string $pcgVersion): self
    {
        $this->pcgVersion = $pcgVersion;

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
