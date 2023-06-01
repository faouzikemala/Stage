<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductLot
 *
 * @ORM\Table(name="product_lot", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_lot", columns={"fk_product", "batch"})})
 * @ORM\Entity
 */
class ProductLot
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
     * @ORM\Column(name="entity", type="integer", nullable=true, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_product", type="integer", nullable=false)
     */
    private $fkProduct;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="eol_date", type="datetime", nullable=true)
     */
    private $eolDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="manufacturing_date", type="datetime", nullable=true)
     */
    private $manufacturingDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="scrapping_date", type="datetime", nullable=true)
     */
    private $scrappingDate;

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
     * @var int|null
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=true)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var int|null
     *
     * @ORM\Column(name="import_key", type="integer", nullable=true)
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

    public function setEntity(?int $entity): self
    {
        $this->entity = $entity;

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

    public function getEolDate(): ?\DateTimeInterface
    {
        return $this->eolDate;
    }

    public function setEolDate(?\DateTimeInterface $eolDate): self
    {
        $this->eolDate = $eolDate;

        return $this;
    }

    public function getManufacturingDate(): ?\DateTimeInterface
    {
        return $this->manufacturingDate;
    }

    public function setManufacturingDate(?\DateTimeInterface $manufacturingDate): self
    {
        $this->manufacturingDate = $manufacturingDate;

        return $this;
    }

    public function getScrappingDate(): ?\DateTimeInterface
    {
        return $this->scrappingDate;
    }

    public function setScrappingDate(?\DateTimeInterface $scrappingDate): self
    {
        $this->scrappingDate = $scrappingDate;

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

    public function getFkUserCreat(): ?int
    {
        return $this->fkUserCreat;
    }

    public function setFkUserCreat(?int $fkUserCreat): self
    {
        $this->fkUserCreat = $fkUserCreat;

        return $this;
    }

    public function getFkUserModif(): ?int
    {
        return $this->fkUserModif;
    }

    public function setFkUserModif(?int $fkUserModif): self
    {
        $this->fkUserModif = $fkUserModif;

        return $this;
    }

    public function getImportKey(): ?int
    {
        return $this->importKey;
    }

    public function setImportKey(?int $importKey): self
    {
        $this->importKey = $importKey;

        return $this;
    }


}
