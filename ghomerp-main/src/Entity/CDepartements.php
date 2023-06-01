<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CDepartements
 *
 * @ORM\Table(name="c_departements", uniqueConstraints={@ORM\UniqueConstraint(name="uk_departements", columns={"code_departement", "fk_region"})}, indexes={@ORM\Index(name="idx_departements_fk_region", columns={"fk_region"})})
 * @ORM\Entity
 */
class CDepartements
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
     * @ORM\Column(name="code_departement", type="string", length=6, nullable=false)
     */
    private $codeDepartement;

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
     * @ORM\Column(name="ncc", type="string", length=50, nullable=true)
     */
    private $ncc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var \CRegions
     *
     * @ORM\ManyToOne(targetEntity="CRegions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_region", referencedColumnName="code_region")
     * })
     */
    private $fkRegion;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getCodeDepartement(): ?string
    {
        return $this->codeDepartement;
    }

    public function setCodeDepartement(string $codeDepartement): self
    {
        $this->codeDepartement = $codeDepartement;

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

    public function getNcc(): ?string
    {
        return $this->ncc;
    }

    public function setNcc(?string $ncc): self
    {
        $this->ncc = $ncc;

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

    public function getFkRegion(): ?CRegions
    {
        return $this->fkRegion;
    }

    public function setFkRegion(?CRegions $fkRegion): self
    {
        $this->fkRegion = $fkRegion;

        return $this;
    }


}
