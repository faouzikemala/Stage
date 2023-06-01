<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrelevementFactureDemande
 *
 * @ORM\Table(name="prelevement_facture_demande", indexes={@ORM\Index(name="idx_prelevement_facture_demande_fk_facture_fourn", columns={"fk_facture_fourn"}), @ORM\Index(name="idx_prelevement_facture_demande_fk_facture", columns={"fk_facture"})})
 * @ORM\Entity
 */
class PrelevementFactureDemande
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
     * @var int|null
     *
     * @ORM\Column(name="fk_facture", type="integer", nullable=true)
     */
    private $fkFacture;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_facture_fourn", type="integer", nullable=true)
     */
    private $fkFactureFourn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sourcetype", type="string", length=32, nullable=true)
     */
    private $sourcetype;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=false)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_demande", type="datetime", nullable=false)
     */
    private $dateDemande;

    /**
     * @var int|null
     *
     * @ORM\Column(name="traite", type="smallint", nullable=true)
     */
    private $traite = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_traite", type="datetime", nullable=true)
     */
    private $dateTraite;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_prelevement_bons", type="integer", nullable=true)
     */
    private $fkPrelevementBons;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_demande", type="integer", nullable=false)
     */
    private $fkUserDemande;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_banque", type="string", length=128, nullable=true)
     */
    private $codeBanque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code_guichet", type="string", length=6, nullable=true)
     */
    private $codeGuichet;

    /**
     * @var string|null
     *
     * @ORM\Column(name="number", type="string", length=255, nullable=true)
     */
    private $number;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cle_rib", type="string", length=5, nullable=true)
     */
    private $cleRib;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ext_payment_id", type="string", length=128, nullable=true)
     */
    private $extPaymentId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ext_payment_site", type="string", length=128, nullable=true)
     */
    private $extPaymentSite;

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

    public function getFkFacture(): ?int
    {
        return $this->fkFacture;
    }

    public function setFkFacture(?int $fkFacture): self
    {
        $this->fkFacture = $fkFacture;

        return $this;
    }

    public function getFkFactureFourn(): ?int
    {
        return $this->fkFactureFourn;
    }

    public function setFkFactureFourn(?int $fkFactureFourn): self
    {
        $this->fkFactureFourn = $fkFactureFourn;

        return $this;
    }

    public function getSourcetype(): ?string
    {
        return $this->sourcetype;
    }

    public function setSourcetype(?string $sourcetype): self
    {
        $this->sourcetype = $sourcetype;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->dateDemande;
    }

    public function setDateDemande(\DateTimeInterface $dateDemande): self
    {
        $this->dateDemande = $dateDemande;

        return $this;
    }

    public function getTraite(): ?int
    {
        return $this->traite;
    }

    public function setTraite(?int $traite): self
    {
        $this->traite = $traite;

        return $this;
    }

    public function getDateTraite(): ?\DateTimeInterface
    {
        return $this->dateTraite;
    }

    public function setDateTraite(?\DateTimeInterface $dateTraite): self
    {
        $this->dateTraite = $dateTraite;

        return $this;
    }

    public function getFkPrelevementBons(): ?int
    {
        return $this->fkPrelevementBons;
    }

    public function setFkPrelevementBons(?int $fkPrelevementBons): self
    {
        $this->fkPrelevementBons = $fkPrelevementBons;

        return $this;
    }

    public function getFkUserDemande(): ?int
    {
        return $this->fkUserDemande;
    }

    public function setFkUserDemande(int $fkUserDemande): self
    {
        $this->fkUserDemande = $fkUserDemande;

        return $this;
    }

    public function getCodeBanque(): ?string
    {
        return $this->codeBanque;
    }

    public function setCodeBanque(?string $codeBanque): self
    {
        $this->codeBanque = $codeBanque;

        return $this;
    }

    public function getCodeGuichet(): ?string
    {
        return $this->codeGuichet;
    }

    public function setCodeGuichet(?string $codeGuichet): self
    {
        $this->codeGuichet = $codeGuichet;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getCleRib(): ?string
    {
        return $this->cleRib;
    }

    public function setCleRib(?string $cleRib): self
    {
        $this->cleRib = $cleRib;

        return $this;
    }

    public function getExtPaymentId(): ?string
    {
        return $this->extPaymentId;
    }

    public function setExtPaymentId(?string $extPaymentId): self
    {
        $this->extPaymentId = $extPaymentId;

        return $this;
    }

    public function getExtPaymentSite(): ?string
    {
        return $this->extPaymentSite;
    }

    public function setExtPaymentSite(?string $extPaymentSite): self
    {
        $this->extPaymentSite = $extPaymentSite;

        return $this;
    }


}
