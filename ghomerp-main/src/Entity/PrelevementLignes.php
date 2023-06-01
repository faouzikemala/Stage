<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrelevementLignes
 *
 * @ORM\Table(name="prelevement_lignes", indexes={@ORM\Index(name="idx_prelevement_lignes_fk_prelevement_bons", columns={"fk_prelevement_bons"})})
 * @ORM\Entity
 */
class PrelevementLignes
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
     * @ORM\Column(name="fk_soc", type="integer", nullable=false)
     */
    private $fkSoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="statut", type="smallint", nullable=true)
     */
    private $statut = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="client_nom", type="string", length=255, nullable=true)
     */
    private $clientNom;

    /**
     * @var float|null
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $amount = 0.00000000;

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
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var \PrelevementBons
     *
     * @ORM\ManyToOne(targetEntity="PrelevementBons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_prelevement_bons", referencedColumnName="rowid")
     * })
     */
    private $fkPrelevementBons;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkSoc(): ?int
    {
        return $this->fkSoc;
    }

    public function setFkSoc(int $fkSoc): self
    {
        $this->fkSoc = $fkSoc;

        return $this;
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

    public function getClientNom(): ?string
    {
        return $this->clientNom;
    }

    public function setClientNom(?string $clientNom): self
    {
        $this->clientNom = $clientNom;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

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

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getFkPrelevementBons(): ?PrelevementBons
    {
        return $this->fkPrelevementBons;
    }

    public function setFkPrelevementBons(?PrelevementBons $fkPrelevementBons): self
    {
        $this->fkPrelevementBons = $fkPrelevementBons;

        return $this;
    }


}
