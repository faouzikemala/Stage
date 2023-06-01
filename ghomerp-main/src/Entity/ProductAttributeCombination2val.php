<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductAttributeCombination2val
 *
 * @ORM\Table(name="product_attribute_combination2val")
 * @ORM\Entity
 */
class ProductAttributeCombination2val
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
     * @ORM\Column(name="fk_prod_combination", type="integer", nullable=false)
     */
    private $fkProdCombination;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_prod_attr", type="integer", nullable=false)
     */
    private $fkProdAttr;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_prod_attr_val", type="integer", nullable=false)
     */
    private $fkProdAttrVal;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkProdCombination(): ?int
    {
        return $this->fkProdCombination;
    }

    public function setFkProdCombination(int $fkProdCombination): self
    {
        $this->fkProdCombination = $fkProdCombination;

        return $this;
    }

    public function getFkProdAttr(): ?int
    {
        return $this->fkProdAttr;
    }

    public function setFkProdAttr(int $fkProdAttr): self
    {
        $this->fkProdAttr = $fkProdAttr;

        return $this;
    }

    public function getFkProdAttrVal(): ?int
    {
        return $this->fkProdAttrVal;
    }

    public function setFkProdAttrVal(int $fkProdAttrVal): self
    {
        $this->fkProdAttrVal = $fkProdAttrVal;

        return $this;
    }


}
