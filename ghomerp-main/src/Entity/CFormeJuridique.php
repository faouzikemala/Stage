<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * CFormeJuridique
 * @ApiResource()
 * @ORM\Table(name="c_forme_juridique", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_forme_juridique", columns={"code"})})
 * @ORM\Entity
 */
class CFormeJuridique
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
     * @ORM\Column(name="code", type="integer", nullable=false)
     */
    private $code;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_pays", type="integer", nullable=false)
     */
    private $fkPays;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @var bool
     *
     * @ORM\Column(name="isvatexempted", type="boolean", nullable=false)
     */
    private $isvatexempted = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

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

    public function getCode(): ?int
    {
        return $this->code;
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

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

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getIsvatexempted(): ?bool
    {
        return $this->isvatexempted;
    }

    public function setIsvatexempted(bool $isvatexempted): self
    {
        $this->isvatexempted = $isvatexempted;

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
