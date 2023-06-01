<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductAssociation
 *
 * @ORM\Table(name="product_association", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_association", columns={"fk_product_pere", "fk_product_fils"})}, indexes={@ORM\Index(name="idx_product_association_fils", columns={"fk_product_fils"})})
 * @ORM\Entity
 */
class ProductAssociation
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
     * @ORM\Column(name="fk_product_pere", type="integer", nullable=false)
     */
    private $fkProductPere = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_product_fils", type="integer", nullable=false)
     */
    private $fkProductFils = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=true)
     */
    private $qty;

    /**
     * @var int|null
     *
     * @ORM\Column(name="incdec", type="integer", nullable=true, options={"default"="1"})
     */
    private $incdec = 1;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkProductPere(): ?int
    {
        return $this->fkProductPere;
    }

    public function setFkProductPere(int $fkProductPere): self
    {
        $this->fkProductPere = $fkProductPere;

        return $this;
    }

    public function getFkProductFils(): ?int
    {
        return $this->fkProductFils;
    }

    public function setFkProductFils(int $fkProductFils): self
    {
        $this->fkProductFils = $fkProductFils;

        return $this;
    }

    public function getQty(): ?float
    {
        return $this->qty;
    }

    public function setQty(?float $qty): self
    {
        $this->qty = $qty;

        return $this;
    }

    public function getIncdec(): ?int
    {
        return $this->incdec;
    }

    public function setIncdec(?int $incdec): self
    {
        $this->incdec = $incdec;

        return $this;
    }


}
