<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeFournisseurLog
 *
 * @ORM\Table(name="commande_fournisseur_log")
 * @ORM\Entity
 */
class CommandeFournisseurLog
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
     * @ORM\Column(name="datelog", type="datetime", nullable=false)
     */
    private $datelog;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_commande", type="integer", nullable=false)
     */
    private $fkCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_statut", type="smallint", nullable=false)
     */
    private $fkStatut;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     */
    private $fkUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

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

    public function getDatelog(): ?\DateTimeInterface
    {
        return $this->datelog;
    }

    public function setDatelog(\DateTimeInterface $datelog): self
    {
        $this->datelog = $datelog;

        return $this;
    }

    public function getFkCommande(): ?int
    {
        return $this->fkCommande;
    }

    public function setFkCommande(int $fkCommande): self
    {
        $this->fkCommande = $fkCommande;

        return $this;
    }

    public function getFkStatut(): ?int
    {
        return $this->fkStatut;
    }

    public function setFkStatut(int $fkStatut): self
    {
        $this->fkStatut = $fkStatut;

        return $this;
    }

    public function getFkUser(): ?int
    {
        return $this->fkUser;
    }

    public function setFkUser(int $fkUser): self
    {
        $this->fkUser = $fkUser;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }


}
