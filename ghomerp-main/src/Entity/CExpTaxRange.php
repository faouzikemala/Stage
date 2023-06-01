<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * CExpTaxRange
 * @ApiResource()
 * @ORM\Table(name="c_exp_tax_range")
 * @ORM\Entity
 */
class CExpTaxRange
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
     * @ORM\Column(name="fk_c_exp_tax_cat", type="integer", nullable=false, options={"default"="1"})
     */
    private $fkCExpTaxCat = 1;

    /**
     * @var float
     *
     * @ORM\Column(name="range_ik", type="float", precision=10, scale=0, nullable=false)
     */
    private $rangeIk = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="integer", nullable=false, options={"default"="1"})
     */
    private $active = 1;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkCExpTaxCat(): ?int
    {
        return $this->fkCExpTaxCat;
    }

    public function setFkCExpTaxCat(int $fkCExpTaxCat): self
    {
        $this->fkCExpTaxCat = $fkCExpTaxCat;

        return $this;
    }

    public function getRangeIk(): ?float
    {
        return $this->rangeIk;
    }

    public function setRangeIk(float $rangeIk): self
    {
        $this->rangeIk = $rangeIk;

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

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(int $active): self
    {
        $this->active = $active;

        return $this;
    }


}
