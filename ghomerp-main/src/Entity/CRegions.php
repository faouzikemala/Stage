<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CRegions
 *
 * @ORM\Table(name="c_regions", uniqueConstraints={@ORM\UniqueConstraint(name="uk_code_region", columns={"code_region"})}, indexes={@ORM\Index(name="idx_c_regions_fk_pays", columns={"fk_pays"})})
 * @ORM\Entity
 */
class CRegions
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
     * @var int
     *
     * @ORM\Column(name="code_region", type="integer", nullable=false)
     */
    private $codeRegion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cheflieu", type="string", length=50, nullable=true)
     */
    private $cheflieu;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tncc", type="integer", nullable=true)
     */
    private $tncc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=true)
     */
    private $nom;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var \CCountry
     *
     * @ORM\ManyToOne(targetEntity="CCountry")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_pays", referencedColumnName="rowid")
     * })
     */
    private $fkPays;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getCodeRegion(): ?int
    {
        return $this->codeRegion;
    }

    public function setCodeRegion(int $codeRegion): self
    {
        $this->codeRegion = $codeRegion;

        return $this;
    }

    public function getCheflieu(): ?string
    {
        return $this->cheflieu;
    }

    public function setCheflieu(?string $cheflieu): self
    {
        $this->cheflieu = $cheflieu;

        return $this;
    }

    public function getTncc(): ?int
    {
        return $this->tncc;
    }

    public function setTncc(?int $tncc): self
    {
        $this->tncc = $tncc;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

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

    public function getFkPays(): ?CCountry
    {
        return $this->fkPays;
    }

    public function setFkPays(?CCountry $fkPays): self
    {
        $this->fkPays = $fkPays;

        return $this;
    }


}
