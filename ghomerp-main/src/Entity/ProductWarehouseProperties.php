<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductWarehouseProperties
 *
 * @ORM\Table(name="product_warehouse_properties")
 * @ORM\Entity
 */
class ProductWarehouseProperties
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
     * @var int
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=false)
     */
    private $fkProduct;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_entrepot", type="integer", nullable=false)
     */
    private $fkEntrepot;

    /**
     * @var float|null
     *
     * @ORM\Column(name="seuil_stock_alerte", type="float", precision=10, scale=0, nullable=true)
     */
    private $seuilStockAlerte = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="desiredstock", type="float", precision=10, scale=0, nullable=true)
     */
    private $desiredstock = '0';

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

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(?\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

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

    public function getFkEntrepot(): ?int
    {
        return $this->fkEntrepot;
    }

    public function setFkEntrepot(int $fkEntrepot): self
    {
        $this->fkEntrepot = $fkEntrepot;

        return $this;
    }

    public function getSeuilStockAlerte(): ?float
    {
        return $this->seuilStockAlerte;
    }

    public function setSeuilStockAlerte(?float $seuilStockAlerte): self
    {
        $this->seuilStockAlerte = $seuilStockAlerte;

        return $this;
    }

    public function getDesiredstock(): ?float
    {
        return $this->desiredstock;
    }

    public function setDesiredstock(?float $desiredstock): self
    {
        $this->desiredstock = $desiredstock;

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
