<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductAttributeCombinationPriceLevel
 *
 * @ORM\Table(name="product_attribute_combination_price_level", uniqueConstraints={@ORM\UniqueConstraint(name="fk_product_attribute_combination", columns={"fk_product_attribute_combination", "fk_price_level"})})
 * @ORM\Entity
 */
class ProductAttributeCombinationPriceLevel
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
     * @ORM\Column(name="fk_product_attribute_combination", type="integer", nullable=false, options={"default"="1"})
     */
    private $fkProductAttributeCombination = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_price_level", type="integer", nullable=false, options={"default"="1"})
     */
    private $fkPriceLevel = 1;

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

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkProductAttributeCombination(): ?int
    {
        return $this->fkProductAttributeCombination;
    }

    public function setFkProductAttributeCombination(int $fkProductAttributeCombination): self
    {
        $this->fkProductAttributeCombination = $fkProductAttributeCombination;

        return $this;
    }

    public function getFkPriceLevel(): ?int
    {
        return $this->fkPriceLevel;
    }

    public function setFkPriceLevel(int $fkPriceLevel): self
    {
        $this->fkPriceLevel = $fkPriceLevel;

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


}
