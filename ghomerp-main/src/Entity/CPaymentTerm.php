<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CPaymentTerm
 *
 * @ORM\Table(name="c_payment_term", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_payment_term_code", columns={"entity", "code"})})
 * @ORM\Entity
 */
class CPaymentTerm
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
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=16, nullable=true)
     */
    private $code;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortorder", type="smallint", nullable=true)
     */
    private $sortorder;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle_facture", type="text", length=65535, nullable=true)
     */
    private $libelleFacture;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="type_cdr", type="boolean", nullable=true)
     */
    private $typeCdr;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbjour", type="smallint", nullable=true)
     */
    private $nbjour;

    /**
     * @var int|null
     *
     * @ORM\Column(name="decalage", type="smallint", nullable=true)
     */
    private $decalage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=32, nullable=true)
     */
    private $module;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position = '0';

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(int $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getSortorder(): ?int
    {
        return $this->sortorder;
    }

    public function setSortorder(?int $sortorder): self
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
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

    public function getLibelleFacture(): ?string
    {
        return $this->libelleFacture;
    }

    public function setLibelleFacture(?string $libelleFacture): self
    {
        $this->libelleFacture = $libelleFacture;

        return $this;
    }

    public function getTypeCdr(): ?bool
    {
        return $this->typeCdr;
    }

    public function setTypeCdr(?bool $typeCdr): self
    {
        $this->typeCdr = $typeCdr;

        return $this;
    }

    public function getNbjour(): ?int
    {
        return $this->nbjour;
    }

    public function setNbjour(?int $nbjour): self
    {
        $this->nbjour = $nbjour;

        return $this;
    }

    public function getDecalage(): ?int
    {
        return $this->decalage;
    }

    public function setDecalage(?int $decalage): self
    {
        $this->decalage = $decalage;

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

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }


}
