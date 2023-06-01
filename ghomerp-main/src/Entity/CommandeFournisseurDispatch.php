<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeFournisseurDispatch
 *
 * @ORM\Table(name="commande_fournisseur_dispatch", indexes={@ORM\Index(name="idx_commande_fournisseur_dispatch_fk_reception", columns={"fk_reception"}), @ORM\Index(name="idx_commande_fournisseur_dispatch_fk_commande", columns={"fk_commande"})})
 * @ORM\Entity
 */
class CommandeFournisseurDispatch
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
     * @ORM\Column(name="fk_commande", type="integer", nullable=true)
     */
    private $fkCommande;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=true)
     */
    private $fkProduct;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_commandefourndet", type="integer", nullable=true)
     */
    private $fkCommandefourndet;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_projet", type="integer", nullable=true)
     */
    private $fkProjet;

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=true)
     */
    private $qty;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_entrepot", type="integer", nullable=true)
     */
    private $fkEntrepot;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var string|null
     *
     * @ORM\Column(name="batch", type="string", length=128, nullable=true)
     */
    private $batch;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="eatby", type="date", nullable=true)
     */
    private $eatby;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sellby", type="date", nullable=true)
     */
    private $sellby;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \Reception
     *
     * @ORM\ManyToOne(targetEntity="Reception")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_reception", referencedColumnName="rowid")
     * })
     */
    private $fkReception;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkCommande(): ?int
    {
        return $this->fkCommande;
    }

    public function setFkCommande(?int $fkCommande): self
    {
        $this->fkCommande = $fkCommande;

        return $this;
    }

    public function getFkProduct(): ?int
    {
        return $this->fkProduct;
    }

    public function setFkProduct(?int $fkProduct): self
    {
        $this->fkProduct = $fkProduct;

        return $this;
    }

    public function getFkCommandefourndet(): ?int
    {
        return $this->fkCommandefourndet;
    }

    public function setFkCommandefourndet(?int $fkCommandefourndet): self
    {
        $this->fkCommandefourndet = $fkCommandefourndet;

        return $this;
    }

    public function getFkProjet(): ?int
    {
        return $this->fkProjet;
    }

    public function setFkProjet(?int $fkProjet): self
    {
        $this->fkProjet = $fkProjet;

        return $this;
    }

    public function getQty(): ?float
    {
        return $this->qty;
    }

    public function setQty(?float $qty): self
    {
        $this->qty = $qty;

        return $this;
    }

    public function getFkEntrepot(): ?int
    {
        return $this->fkEntrepot;
    }

    public function setFkEntrepot(?int $fkEntrepot): self
    {
        $this->fkEntrepot = $fkEntrepot;

        return $this;
    }

    public function getFkUser(): ?int
    {
        return $this->fkUser;
    }

    public function setFkUser(?int $fkUser): self
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

    public function getBatch(): ?string
    {
        return $this->batch;
    }

    public function setBatch(?string $batch): self
    {
        $this->batch = $batch;

        return $this;
    }

    public function getEatby(): ?\DateTimeInterface
    {
        return $this->eatby;
    }

    public function setEatby(?\DateTimeInterface $eatby): self
    {
        $this->eatby = $eatby;

        return $this;
    }

    public function getSellby(): ?\DateTimeInterface
    {
        return $this->sellby;
    }

    public function setSellby(?\DateTimeInterface $sellby): self
    {
        $this->sellby = $sellby;

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

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(?\DateTimeInterface $datec): self
    {
        $this->datec = $datec;

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

    public function getFkReception(): ?Reception
    {
        return $this->fkReception;
    }

    public function setFkReception(?Reception $fkReception): self
    {
        $this->fkReception = $fkReception;

        return $this;
    }


}
