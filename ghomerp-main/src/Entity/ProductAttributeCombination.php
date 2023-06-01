<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductAttributeCombination
 *
 * @ORM\Table(name="product_attribute_combination", indexes={@ORM\Index(name="idx_product_att_com_product_child", columns={"fk_product_child"}), @ORM\Index(name="idx_product_att_com_product_parent", columns={"fk_product_parent"})})
 * @ORM\Entity
 */
class ProductAttributeCombination
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
     * @ORM\Column(name="fk_product_parent", type="integer", nullable=false)
     */
    private $fkProductParent;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_product_child", type="integer", nullable=false)
     */
    private $fkProductChild;

    /**
     * @var float
     *
     * @ORM\Column(name="variation_price", type="float", precision=24, scale=8, nullable=false)
     */
    private $variationPrice;

    /**
     * @var int|null
     *
     * @ORM\Column(name="variation_price_percentage", type="integer", nullable=true)
     */
    private $variationPricePercentage;

    /**
     * @var float
     *
     * @ORM\Column(name="variation_weight", type="float", precision=10, scale=0, nullable=false)
     */
    private $variationWeight;

    /**
     * @var string|null
     *
     * @ORM\Column(name="variation_ref_ext", type="string", length=255, nullable=true)
     */
    private $variationRefExt;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkProductParent(): ?int
    {
        return $this->fkProductParent;
    }

    public function setFkProductParent(int $fkProductParent): self
    {
        $this->fkProductParent = $fkProductParent;

        return $this;
    }

    public function getFkProductChild(): ?int
    {
        return $this->fkProductChild;
    }

    public function setFkProductChild(int $fkProductChild): self
    {
        $this->fkProductChild = $fkProductChild;

        return $this;
    }

    public function getVariationPrice(): ?float
    {
        return $this->variationPrice;
    }

    public function setVariationPrice(float $variationPrice): self
    {
        $this->variationPrice = $variationPrice;

        return $this;
    }

    public function getVariationPricePercentage(): ?int
    {
        return $this->variationPricePercentage;
    }

    public function setVariationPricePercentage(?int $variationPricePercentage): self
    {
        $this->variationPricePercentage = $variationPricePercentage;

        return $this;
    }

    public function getVariationWeight(): ?float
    {
        return $this->variationWeight;
    }

    public function setVariationWeight(float $variationWeight): self
    {
        $this->variationWeight = $variationWeight;

        return $this;
    }

    public function getVariationRefExt(): ?string
    {
        return $this->variationRefExt;
    }

    public function setVariationRefExt(?string $variationRefExt): self
    {
        $this->variationRefExt = $variationRefExt;

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


}
