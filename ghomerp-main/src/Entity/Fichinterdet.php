<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichinterdet
 *
 * @ORM\Table(name="fichinterdet", indexes={@ORM\Index(name="idx_fichinterdet_fk_fichinter", columns={"fk_fichinter"})})
 * @ORM\Entity
 */
class Fichinterdet
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
     * @ORM\Column(name="fk_parent_line", type="integer", nullable=true)
     */
    private $fkParentLine;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="duree", type="integer", nullable=true)
     */
    private $duree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang = '0';

    /**
     * @var \Fichinter
     *
     * @ORM\ManyToOne(targetEntity="Fichinter")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_fichinter", referencedColumnName="rowid")
     * })
     */
    private $fkFichinter;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkParentLine(): ?int
    {
        return $this->fkParentLine;
    }

    public function setFkParentLine(?int $fkParentLine): self
    {
        $this->fkParentLine = $fkParentLine;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(?int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(?int $rang): self
    {
        $this->rang = $rang;

        return $this;
    }

    public function getFkFichinter(): ?Fichinter
    {
        return $this->fkFichinter;
    }

    public function setFkFichinter(?Fichinter $fkFichinter): self
    {
        $this->fkFichinter = $fkFichinter;

        return $this;
    }


}
