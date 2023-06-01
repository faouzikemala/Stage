<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OpensurveySondage
 *
 * @ORM\Table(name="opensurvey_sondage", indexes={@ORM\Index(name="idx_date_fin", columns={"date_fin"})})
 * @ORM\Entity
 */
class OpensurveySondage
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_sondage", type="string", length=16, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSondage;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="commentaires", type="text", length=65535, nullable=true)
     */
    private $commentaires;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mail_admin", type="string", length=128, nullable=true)
     */
    private $mailAdmin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_admin", type="string", length=64, nullable=true)
     */
    private $nomAdmin;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=false)
     */
    private $fkUserCreat;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="text", length=65535, nullable=false)
     */
    private $titre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true, options={"default"="1"})
     */
    private $status = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="format", type="string", length=2, nullable=false)
     */
    private $format;

    /**
     * @var bool
     *
     * @ORM\Column(name="mailsonde", type="boolean", nullable=false)
     */
    private $mailsonde = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="allow_comments", type="boolean", nullable=false, options={"default"="1"})
     */
    private $allowComments = true;

    /**
     * @var bool
     *
     * @ORM\Column(name="allow_spy", type="boolean", nullable=false, options={"default"="1"})
     */
    private $allowSpy = true;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="sujet", type="text", length=65535, nullable=true)
     */
    private $sujet;

    public function getIdSondage(): ?string
    {
        return $this->idSondage;
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

    public function getCommentaires(): ?string
    {
        return $this->commentaires;
    }

    public function setCommentaires(?string $commentaires): self
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    public function getMailAdmin(): ?string
    {
        return $this->mailAdmin;
    }

    public function setMailAdmin(?string $mailAdmin): self
    {
        $this->mailAdmin = $mailAdmin;

        return $this;
    }

    public function getNomAdmin(): ?string
    {
        return $this->nomAdmin;
    }

    public function setNomAdmin(?string $nomAdmin): self
    {
        $this->nomAdmin = $nomAdmin;

        return $this;
    }

    public function getFkUserCreat(): ?int
    {
        return $this->fkUserCreat;
    }

    public function setFkUserCreat(int $fkUserCreat): self
    {
        $this->fkUserCreat = $fkUserCreat;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function setFormat(string $format): self
    {
        $this->format = $format;

        return $this;
    }

    public function getMailsonde(): ?bool
    {
        return $this->mailsonde;
    }

    public function setMailsonde(bool $mailsonde): self
    {
        $this->mailsonde = $mailsonde;

        return $this;
    }

    public function getAllowComments(): ?bool
    {
        return $this->allowComments;
    }

    public function setAllowComments(bool $allowComments): self
    {
        $this->allowComments = $allowComments;

        return $this;
    }

    public function getAllowSpy(): ?bool
    {
        return $this->allowSpy;
    }

    public function setAllowSpy(bool $allowSpy): self
    {
        $this->allowSpy = $allowSpy;

        return $this;
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

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(?string $sujet): self
    {
        $this->sujet = $sujet;

        return $this;
    }


}
