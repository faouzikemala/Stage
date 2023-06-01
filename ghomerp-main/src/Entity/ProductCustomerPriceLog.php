<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductCustomerPriceLog
 *
 * @ORM\Table(name="product_customer_price_log")
 * @ORM\Entity
 */
class ProductCustomerPriceLog
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=false)
     */
    private $fkProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=false)
     */
    private $fkSoc = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_customer", type="string", length=30, nullable=true)
     */
    private $refCustomer;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $price = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $priceTtc = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_min", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $priceMin = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="price_min_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $priceMinTtc = 0.00000000;

    /**
     * @var string|null
     *
     * @ORM\Column(name="price_base_type", type="string", length=3, nullable=true, options={"default"="HT"})
     */
    private $priceBaseType = 'HT';

    /**
     * @var string|null
     *
     * @ORM\Column(name="default_vat_code", type="string", length=10, nullable=true)
     */
    private $defaultVatCode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tva_tx", type="float", precision=6, scale=3, nullable=true)
     */
    private $tvaTx;

    /**
     * @var int
     *
     * @ORM\Column(name="recuperableonly", type="integer", nullable=false)
     */
    private $recuperableonly = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax1_tx", type="float", precision=6, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $localtax1Tx = 0.000;

    /**
     * @var string
     *
     * @ORM\Column(name="localtax1_type", type="string", length=10, nullable=false)
     */
    private $localtax1Type = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax2_tx", type="float", precision=6, scale=3, nullable=true, options={"default"="0.000"})
     */
    private $localtax2Tx = 0.000;

    /**
     * @var string
     *
     * @ORM\Column(name="localtax2_type", type="string", length=10, nullable=false)
     */
    private $localtax2Type = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

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

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(?\DateTimeInterface $datec): self
    {
        $this->datec = $datec;

        return $this;
    }

    public function getFkProduct(): ?int
    {
        return $this->fkProduct;
    }

    public function setFkProduct(int $fkProduct): self
    {
        $this->fkProduct = $fkProduct;

        return $this;
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

    public function getRefCustomer(): ?string
    {
        return $this->refCustomer;
    }

    public function setRefCustomer(?string $refCustomer): self
    {
        $this->refCustomer = $refCustomer;

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

    public function getPriceTtc(): ?float
    {
        return $this->priceTtc;
    }

    public function setPriceTtc(?float $priceTtc): self
    {
        $this->priceTtc = $priceTtc;

        return $this;
    }

    public function getPriceMin(): ?float
    {
        return $this->priceMin;
    }

    public function setPriceMin(?float $priceMin): self
    {
        $this->priceMin = $priceMin;

        return $this;
    }

    public function getPriceMinTtc(): ?float
    {
        return $this->priceMinTtc;
    }

    public function setPriceMinTtc(?float $priceMinTtc): self
    {
        $this->priceMinTtc = $priceMinTtc;

        return $this;
    }

    public function getPriceBaseType(): ?string
    {
        return $this->priceBaseType;
    }

    public function setPriceBaseType(?string $priceBaseType): self
    {
        $this->priceBaseType = $priceBaseType;

        return $this;
    }

    public function getDefaultVatCode(): ?string
    {
        return $this->defaultVatCode;
    }

    public function setDefaultVatCode(?string $defaultVatCode): self
    {
        $this->defaultVatCode = $defaultVatCode;

        return $this;
    }

    public function getTvaTx(): ?float
    {
        return $this->tvaTx;
    }

    public function setTvaTx(?float $tvaTx): self
    {
        $this->tvaTx = $tvaTx;

        return $this;
    }

    public function getRecuperableonly(): ?int
    {
        return $this->recuperableonly;
    }

    public function setRecuperableonly(int $recuperableonly): self
    {
        $this->recuperableonly = $recuperableonly;

        return $this;
    }

    public function getLocaltax1Tx(): ?float
    {
        return $this->localtax1Tx;
    }

    public function setLocaltax1Tx(?float $localtax1Tx): self
    {
        $this->localtax1Tx = $localtax1Tx;

        return $this;
    }

    public function getLocaltax1Type(): ?string
    {
        return $this->localtax1Type;
    }

    public function setLocaltax1Type(string $localtax1Type): self
    {
        $this->localtax1Type = $localtax1Type;

        return $this;
    }

    public function getLocaltax2Tx(): ?float
    {
        return $this->localtax2Tx;
    }

    public function setLocaltax2Tx(?float $localtax2Tx): self
    {
        $this->localtax2Tx = $localtax2Tx;

        return $this;
    }

    public function getLocaltax2Type(): ?string
    {
        return $this->localtax2Type;
    }

    public function setLocaltax2Type(string $localtax2Type): self
    {
        $this->localtax2Type = $localtax2Type;

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

    public function getImportKey(): ?string
    {
        return $this->importKey;
    }

    public function setImportKey(?string $importKey): self
    {
        $this->importKey = $importKey;

        return $this;
    }


}
