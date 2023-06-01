<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContratdetLog
 *
 * @ORM\Table(name="contratdet_log", indexes={@ORM\Index(name="idx_contratdet_log_date", columns={"date"}), @ORM\Index(name="idx_contratdet_log_fk_contratdet", columns={"fk_contratdet"})})
 * @ORM\Entity
 */
class ContratdetLog
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
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="statut", type="smallint", nullable=false)
     */
    private $statut;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_author", type="integer", nullable=false)
     */
    private $fkUserAuthor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaire", type="text", length=65535, nullable=true)
     */
    private $commentaire;

    /**
     * @var \Contratdet
     *
     * @ORM\ManyToOne(targetEntity="Contratdet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_contratdet", referencedColumnName="rowid")
     * })
     */
    private $fkContratdet;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(?\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(int $statut): self
    {
        $this->statut = $statut;

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

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getFkContratdet(): ?Contratdet
    {
        return $this->fkContratdet;
    }

    public function setFkContratdet(?Contratdet $fkContratdet): self
    {
        $this->fkContratdet = $fkContratdet;

        return $this;
    }


}
