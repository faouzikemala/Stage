<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrelevementRejet
 *
 * @ORM\Table(name="prelevement_rejet")
 * @ORM\Entity
 */
class PrelevementRejet
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
     * @ORM\Column(name="fk_prelevement_lignes", type="integer", nullable=true)
     */
    private $fkPrelevementLignes;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_rejet", type="datetime", nullable=true)
     */
    private $dateRejet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="motif", type="integer", nullable=true)
     */
    private $motif;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_creation", type="integer", nullable=true)
     */
    private $fkUserCreation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="afacturer", type="boolean", nullable=true)
     */
    private $afacturer = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_facture", type="integer", nullable=true)
     */
    private $fkFacture;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkPrelevementLignes(): ?int
    {
        return $this->fkPrelevementLignes;
    }

    public function setFkPrelevementLignes(?int $fkPrelevementLignes): self
    {
        $this->fkPrelevementLignes = $fkPrelevementLignes;

        return $this;
    }

    public function getDateRejet(): ?\DateTimeInterface
    {
        return $this->dateRejet;
    }

    public function setDateRejet(?\DateTimeInterface $dateRejet): self
    {
        $this->dateRejet = $dateRejet;

        return $this;
    }

    public function getMotif(): ?int
    {
        return $this->motif;
    }

    public function setMotif(?int $motif): self
    {
        $this->motif = $motif;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getFkUserCreation(): ?int
    {
        return $this->fkUserCreation;
    }

    public function setFkUserCreation(?int $fkUserCreation): self
    {
        $this->fkUserCreation = $fkUserCreation;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getAfacturer(): ?bool
    {
        return $this->afacturer;
    }

    public function setAfacturer(?bool $afacturer): self
    {
        $this->afacturer = $afacturer;

        return $this;
    }

    public function getFkFacture(): ?int
    {
        return $this->fkFacture;
    }

    public function setFkFacture(?int $fkFacture): self
    {
        $this->fkFacture = $fkFacture;

        return $this;
    }


}
