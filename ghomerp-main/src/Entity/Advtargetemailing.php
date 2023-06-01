<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advtargetemailing
 *
 * @ORM\Table(name="advtargetemailing", uniqueConstraints={@ORM\UniqueConstraint(name="uk_advtargetemailing_name", columns={"name"})})
 * @ORM\Entity
 */
class Advtargetemailing
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
     * @ORM\Column(name="name", type="string", length=180, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_element", type="integer", nullable=false)
     */
    private $fkElement;

    /**
     * @var string
     *
     * @ORM\Column(name="type_element", type="string", length=180, nullable=false)
     */
    private $typeElement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="filtervalue", type="text", length=65535, nullable=true)
     */
    private $filtervalue;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=false)
     */
    private $fkUserAuthor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datec", type="datetime", nullable=false)
     */
    private $datec;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_mod", type="integer", nullable=false)
     */
    private $fkUserMod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tms", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
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

    public function getFkElement(): ?int
    {
        return $this->fkElement;
    }

    public function setFkElement(int $fkElement): self
    {
        $this->fkElement = $fkElement;

        return $this;
    }

    public function getTypeElement(): ?string
    {
        return $this->typeElement;
    }

    public function setTypeElement(string $typeElement): self
    {
        $this->typeElement = $typeElement;

        return $this;
    }

    public function getFiltervalue(): ?string
    {
        return $this->filtervalue;
    }

    public function setFiltervalue(?string $filtervalue): self
    {
        $this->filtervalue = $filtervalue;

        return $this;
    }

    public function getFkUserAuthor(): ?int
    {
        return $this->fkUserAuthor;
    }

    public function setFkUserAuthor(int $fkUserAuthor): self
    {
        $this->fkUserAuthor = $fkUserAuthor;

        return $this;
    }

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(\DateTimeInterface $datec): self
    {
        $this->datec = $datec;

        return $this;
    }

    public function getFkUserMod(): ?int
    {
        return $this->fkUserMod;
    }

    public function setFkUserMod(int $fkUserMod): self
    {
        $this->fkUserMod = $fkUserMod;

        return $this;
    }

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

        return $this;
    }


}
