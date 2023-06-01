<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductBatch
 *
 * @ORM\Table(name="product_batch", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_batch", columns={"fk_product_stock", "batch"})}, indexes={@ORM\Index(name="idx_batch", columns={"batch"}), @ORM\Index(name="idx_fk_product_stock", columns={"fk_product_stock"})})
 * @ORM\Entity
 */
class ProductBatch
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="eatby", type="datetime", nullable=true)
     */
    private $eatby;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sellby", type="datetime", nullable=true)
     */
    private $sellby;

    /**
     * @var string
     *
     * @ORM\Column(name="batch", type="string", length=128, nullable=false)
     */
    private $batch;

    /**
     * @var float
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=false)
     */
    private $qty = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var \ProductStock
     *
     * @ORM\ManyToOne(targetEntity="ProductStock")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_product_stock", referencedColumnName="rowid")
     * })
     */
    private $fkProductStock;

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

    public function getBatch(): ?string
    {
        return $this->batch;
    }

    public function setBatch(string $batch): self
    {
        $this->batch = $batch;

        return $this;
    }

    public function getQty(): ?float
    {
        return $this->qty;
    }

    public function setQty(float $qty): self
    {
        $this->qty = $qty;

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

    public function getFkProductStock(): ?ProductStock
    {
        return $this->fkProductStock;
    }

    public function setFkProductStock(?ProductStock $fkProductStock): self
    {
        $this->fkProductStock = $fkProductStock;

        return $this;
    }


}
