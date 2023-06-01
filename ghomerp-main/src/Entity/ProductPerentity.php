<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductPerentity
 *
 * @ORM\Table(name="product_perentity", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_perentity", columns={"fk_product", "entity"})}, indexes={@ORM\Index(name="idx_product_perentity_fk_product", columns={"fk_product"})})
 * @ORM\Entity
 */
class ProductPerentity
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
     * @ORM\Column(name="fk_product", type="integer", nullable=true)
     */
    private $fkProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_sell", type="string", length=32, nullable=true)
     */
    private $accountancyCodeSell;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_sell_intra", type="string", length=32, nullable=true)
     */
    private $accountancyCodeSellIntra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_sell_export", type="string", length=32, nullable=true)
     */
    private $accountancyCodeSellExport;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_buy", type="string", length=32, nullable=true)
     */
    private $accountancyCodeBuy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_buy_intra", type="string", length=32, nullable=true)
     */
    private $accountancyCodeBuyIntra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code_buy_export", type="string", length=32, nullable=true)
     */
    private $accountancyCodeBuyExport;

    /**
     * @var float|null
     *
     * @ORM\Column(name="pmp", type="float", precision=24, scale=8, nullable=true)
     */
    private $pmp;

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(int $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    public function getAccountancyCodeSell(): ?string
    {
        return $this->accountancyCodeSell;
    }

    public function setAccountancyCodeSell(?string $accountancyCodeSell): self
    {
        $this->accountancyCodeSell = $accountancyCodeSell;

        return $this;
    }

    public function getAccountancyCodeSellIntra(): ?string
    {
        return $this->accountancyCodeSellIntra;
    }

    public function setAccountancyCodeSellIntra(?string $accountancyCodeSellIntra): self
    {
        $this->accountancyCodeSellIntra = $accountancyCodeSellIntra;

        return $this;
    }

    public function getAccountancyCodeSellExport(): ?string
    {
        return $this->accountancyCodeSellExport;
    }

    public function setAccountancyCodeSellExport(?string $accountancyCodeSellExport): self
    {
        $this->accountancyCodeSellExport = $accountancyCodeSellExport;

        return $this;
    }

    public function getAccountancyCodeBuy(): ?string
    {
        return $this->accountancyCodeBuy;
    }

    public function setAccountancyCodeBuy(?string $accountancyCodeBuy): self
    {
        $this->accountancyCodeBuy = $accountancyCodeBuy;

        return $this;
    }

    public function getAccountancyCodeBuyIntra(): ?string
    {
        return $this->accountancyCodeBuyIntra;
    }

    public function setAccountancyCodeBuyIntra(?string $accountancyCodeBuyIntra): self
    {
        $this->accountancyCodeBuyIntra = $accountancyCodeBuyIntra;

        return $this;
    }

    public function getAccountancyCodeBuyExport(): ?string
    {
        return $this->accountancyCodeBuyExport;
    }

    public function setAccountancyCodeBuyExport(?string $accountancyCodeBuyExport): self
    {
        $this->accountancyCodeBuyExport = $accountancyCodeBuyExport;

        return $this;
    }

    public function getPmp(): ?float
    {
        return $this->pmp;
    }

    public function setPmp(?float $pmp): self
    {
        $this->pmp = $pmp;

        return $this;
    }


}
