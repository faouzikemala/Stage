<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductFournisseurPriceLog
 *
 * @ORM\Table(name="product_fournisseur_price_log")
 * @ORM\Entity
 */
class ProductFournisseurPriceLog
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
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_product_fournisseur", type="integer", nullable=false)
     */
    private $fkProductFournisseur;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $price = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="quantity", type="float", precision=10, scale=0, nullable=true)
     */
    private $quantity;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_multicurrency", type="integer", nullable=true)
     */
    private $fkMulticurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="multicurrency_code", type="string", length=255, nullable=true)
     */
    private $multicurrencyCode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_tx", type="float", precision=24, scale=8, nullable=true, options={"default"="1.00000000"})
     */
    private $multicurrencyTx = 1.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_unitprice", type="float", precision=24, scale=8, nullable=true)
     */
    private $multicurrencyUnitprice;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_price", type="float", precision=24, scale=8, nullable=true)
     */
    private $multicurrencyPrice;

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function getFkProductFournisseur(): ?int
    {
        return $this->fkProductFournisseur;
    }

    public function setFkProductFournisseur(int $fkProductFournisseur): self
    {
        $this->fkProductFournisseur = $fkProductFournisseur;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(?float $quantity): self
    {
        $this->quantity = $quantity;

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

    public function getFkMulticurrency(): ?int
    {
        return $this->fkMulticurrency;
    }

    public function setFkMulticurrency(?int $fkMulticurrency): self
    {
        $this->fkMulticurrency = $fkMulticurrency;

        return $this;
    }

    public function getMulticurrencyCode(): ?string
    {
        return $this->multicurrencyCode;
    }

    public function setMulticurrencyCode(?string $multicurrencyCode): self
    {
        $this->multicurrencyCode = $multicurrencyCode;

        return $this;
    }

    public function getMulticurrencyTx(): ?float
    {
        return $this->multicurrencyTx;
    }

    public function setMulticurrencyTx(?float $multicurrencyTx): self
    {
        $this->multicurrencyTx = $multicurrencyTx;

        return $this;
    }

    public function getMulticurrencyUnitprice(): ?float
    {
        return $this->multicurrencyUnitprice;
    }

    public function setMulticurrencyUnitprice(?float $multicurrencyUnitprice): self
    {
        $this->multicurrencyUnitprice = $multicurrencyUnitprice;

        return $this;
    }

    public function getMulticurrencyPrice(): ?float
    {
        return $this->multicurrencyPrice;
    }

    public function setMulticurrencyPrice(?float $multicurrencyPrice): self
    {
        $this->multicurrencyPrice = $multicurrencyPrice;

        return $this;
    }


}
