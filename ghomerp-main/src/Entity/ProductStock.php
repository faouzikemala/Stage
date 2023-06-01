<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductStock
 *
 * @ORM\Table(name="product_stock", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_stock", columns={"fk_product", "fk_entrepot"})}, indexes={@ORM\Index(name="idx_product_stock_fk_entrepot", columns={"fk_entrepot"}), @ORM\Index(name="idx_product_stock_fk_product", columns={"fk_product"})})
 * @ORM\Entity
 */
class ProductStock
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
     * @ORM\Column(name="reel", type="float", precision=10, scale=0, nullable=true)
     */
    private $reel;

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

    public function getReel(): ?float
    {
        return $this->reel;
    }

    public function setReel(?float $reel): self
    {
        $this->reel = $reel;

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
