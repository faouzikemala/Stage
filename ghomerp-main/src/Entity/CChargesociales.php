<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * CChargesociales
 * @ApiResource()
 * @ORM\Table(name="c_chargesociales")
 * @ORM\Entity
 */
class CChargesociales
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=80, nullable=true)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="deductible", type="smallint", nullable=false)
     */
    private $deductible = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=12, nullable=false)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code", type="string", length=32, nullable=true)
     */
    private $accountancyCode;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_pays", type="integer", nullable=false, options={"default"="1"})
     */
    private $fkPays = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=32, nullable=true)
     */
    private $module;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDeductible(): ?int
    {
        return $this->deductible;
    }

    public function setDeductible(int $deductible): self
    {
        $this->deductible = $deductible;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
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

    public function getAccountancyCode(): ?string
    {
        return $this->accountancyCode;
    }

    public function setAccountancyCode(?string $accountancyCode): self
    {
        $this->accountancyCode = $accountancyCode;

        return $this;
    }

    public function getFkPays(): ?int
    {
        return $this->fkPays;
    }

    public function setFkPays(int $fkPays): self
    {
        $this->fkPays = $fkPays;

        return $this;
    }

    public function getModule(): ?string
    {
        return $this->module;
    }

    public function setModule(?string $module): self
    {
        $this->module = $module;

        return $this;
    }


}
