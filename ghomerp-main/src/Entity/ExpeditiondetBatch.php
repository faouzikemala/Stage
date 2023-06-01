<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpeditiondetBatch
 *
 * @ORM\Table(name="expeditiondet_batch", indexes={@ORM\Index(name="idx_fk_expeditiondet", columns={"fk_expeditiondet"})})
 * @ORM\Entity
 */
class ExpeditiondetBatch
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
     * @var string|null
     *
     * @ORM\Column(name="batch", type="string", length=128, nullable=true)
     */
    private $batch;

    /**
     * @var float
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=false)
     */
    private $qty = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_origin_stock", type="integer", nullable=false)
     */
    private $fkOriginStock;

    /**
     * @var \Expeditiondet
     *
     * @ORM\ManyToOne(targetEntity="Expeditiondet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_expeditiondet", referencedColumnName="rowid")
     * })
     */
    private $fkExpeditiondet;

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function setBatch(?string $batch): self
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

    public function getFkOriginStock(): ?int
    {
        return $this->fkOriginStock;
    }

    public function setFkOriginStock(int $fkOriginStock): self
    {
        $this->fkOriginStock = $fkOriginStock;

        return $this;
    }

    public function getFkExpeditiondet(): ?Expeditiondet
    {
        return $this->fkExpeditiondet;
    }

    public function setFkExpeditiondet(?Expeditiondet $fkExpeditiondet): self
    {
        $this->fkExpeditiondet = $fkExpeditiondet;

        return $this;
    }


}
