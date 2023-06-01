<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mailing
 *
 * @ORM\Table(name="mailing")
 * @ORM\Entity
 */
class Mailing
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
     * @ORM\Column(name="statut", type="smallint", nullable=true)
     */
    private $statut = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="titre", type="string", length=128, nullable=true)
     */
    private $titre;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sujet", type="string", length=128, nullable=true)
     */
    private $sujet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="body", type="text", length=16777215, nullable=true)
     */
    private $body;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bgcolor", type="string", length=8, nullable=true)
     */
    private $bgcolor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bgimage", type="string", length=255, nullable=true)
     */
    private $bgimage;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cible", type="string", length=60, nullable=true)
     */
    private $cible;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbemail", type="integer", nullable=true)
     */
    private $nbemail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_from", type="string", length=160, nullable=true)
     */
    private $emailFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_replyto", type="string", length=160, nullable=true)
     */
    private $emailReplyto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_errorsto", type="string", length=160, nullable=true)
     */
    private $emailErrorsto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tag", type="string", length=128, nullable=true)
     */
    private $tag;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creat", type="datetime", nullable=true)
     */
    private $dateCreat;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_valid", type="datetime", nullable=true)
     */
    private $dateValid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_appro", type="datetime", nullable=true)
     */
    private $dateAppro;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_envoi", type="datetime", nullable=true)
     */
    private $dateEnvoi;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=true)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_valid", type="integer", nullable=true)
     */
    private $fkUserValid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_appro", type="integer", nullable=true)
     */
    private $fkUserAppro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extraparams", type="string", length=255, nullable=true)
     */
    private $extraparams;

    /**
     * @var string|null
     *
     * @ORM\Column(name="joined_file1", type="string", length=255, nullable=true)
     */
    private $joinedFile1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="joined_file2", type="string", length=255, nullable=true)
     */
    private $joinedFile2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="joined_file3", type="string", length=255, nullable=true)
     */
    private $joinedFile3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="joined_file4", type="string", length=255, nullable=true)
     */
    private $joinedFile4;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(?int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

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

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(?string $sujet): self
    {
        $this->sujet = $sujet;

        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): self
    {
        $this->body = $body;

        return $this;
    }

    public function getBgcolor(): ?string
    {
        return $this->bgcolor;
    }

    public function setBgcolor(?string $bgcolor): self
    {
        $this->bgcolor = $bgcolor;

        return $this;
    }

    public function getBgimage(): ?string
    {
        return $this->bgimage;
    }

    public function setBgimage(?string $bgimage): self
    {
        $this->bgimage = $bgimage;

        return $this;
    }

    public function getCible(): ?string
    {
        return $this->cible;
    }

    public function setCible(?string $cible): self
    {
        $this->cible = $cible;

        return $this;
    }

    public function getNbemail(): ?int
    {
        return $this->nbemail;
    }

    public function setNbemail(?int $nbemail): self
    {
        $this->nbemail = $nbemail;

        return $this;
    }

    public function getEmailFrom(): ?string
    {
        return $this->emailFrom;
    }

    public function setEmailFrom(?string $emailFrom): self
    {
        $this->emailFrom = $emailFrom;

        return $this;
    }

    public function getEmailReplyto(): ?string
    {
        return $this->emailReplyto;
    }

    public function setEmailReplyto(?string $emailReplyto): self
    {
        $this->emailReplyto = $emailReplyto;

        return $this;
    }

    public function getEmailErrorsto(): ?string
    {
        return $this->emailErrorsto;
    }

    public function setEmailErrorsto(?string $emailErrorsto): self
    {
        $this->emailErrorsto = $emailErrorsto;

        return $this;
    }

    public function getTag(): ?string
    {
        return $this->tag;
    }

    public function setTag(?string $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    public function getDateCreat(): ?\DateTimeInterface
    {
        return $this->dateCreat;
    }

    public function setDateCreat(?\DateTimeInterface $dateCreat): self
    {
        $this->dateCreat = $dateCreat;

        return $this;
    }

    public function getDateValid(): ?\DateTimeInterface
    {
        return $this->dateValid;
    }

    public function setDateValid(?\DateTimeInterface $dateValid): self
    {
        $this->dateValid = $dateValid;

        return $this;
    }

    public function getDateAppro(): ?\DateTimeInterface
    {
        return $this->dateAppro;
    }

    public function setDateAppro(?\DateTimeInterface $dateAppro): self
    {
        $this->dateAppro = $dateAppro;

        return $this;
    }

    public function getDateEnvoi(): ?\DateTimeInterface
    {
        return $this->dateEnvoi;
    }

    public function setDateEnvoi(?\DateTimeInterface $dateEnvoi): self
    {
        $this->dateEnvoi = $dateEnvoi;

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

    public function getFkUserCreat(): ?int
    {
        return $this->fkUserCreat;
    }

    public function setFkUserCreat(?int $fkUserCreat): self
    {
        $this->fkUserCreat = $fkUserCreat;

        return $this;
    }

    public function getFkUserValid(): ?int
    {
        return $this->fkUserValid;
    }

    public function setFkUserValid(?int $fkUserValid): self
    {
        $this->fkUserValid = $fkUserValid;

        return $this;
    }

    public function getFkUserAppro(): ?int
    {
        return $this->fkUserAppro;
    }

    public function setFkUserAppro(?int $fkUserAppro): self
    {
        $this->fkUserAppro = $fkUserAppro;

        return $this;
    }

    public function getExtraparams(): ?string
    {
        return $this->extraparams;
    }

    public function setExtraparams(?string $extraparams): self
    {
        $this->extraparams = $extraparams;

        return $this;
    }

    public function getJoinedFile1(): ?string
    {
        return $this->joinedFile1;
    }

    public function setJoinedFile1(?string $joinedFile1): self
    {
        $this->joinedFile1 = $joinedFile1;

        return $this;
    }

    public function getJoinedFile2(): ?string
    {
        return $this->joinedFile2;
    }

    public function setJoinedFile2(?string $joinedFile2): self
    {
        $this->joinedFile2 = $joinedFile2;

        return $this;
    }

    public function getJoinedFile3(): ?string
    {
        return $this->joinedFile3;
    }

    public function setJoinedFile3(?string $joinedFile3): self
    {
        $this->joinedFile3 = $joinedFile3;

        return $this;
    }

    public function getJoinedFile4(): ?string
    {
        return $this->joinedFile4;
    }

    public function setJoinedFile4(?string $joinedFile4): self
    {
        $this->joinedFile4 = $joinedFile4;

        return $this;
    }


}
