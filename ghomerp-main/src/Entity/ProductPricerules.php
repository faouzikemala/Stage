<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductPricerules
 *
 * @ORM\Table(name="product_pricerules", uniqueConstraints={@ORM\UniqueConstraint(name="unique_level", columns={"level"})})
 * @ORM\Entity
 */
class ProductPricerules
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
     * @ORM\Column(name="level", type="integer", nullable=false)
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_level", type="integer", nullable=false)
     */
    private $fkLevel;

    /**
     * @var float
     *
     * @ORM\Column(name="var_percent", type="float", precision=10, scale=0, nullable=false)
     */
    private $varPercent;

    /**
     * @var float
     *
     * @ORM\Column(name="var_min_percent", type="float", precision=10, scale=0, nullable=false)
     */
    private $varMinPercent;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getFkLevel(): ?int
    {
        return $this->fkLevel;
    }

    public function setFkLevel(int $fkLevel): self
    {
        $this->fkLevel = $fkLevel;

        return $this;
    }

    public function getVarPercent(): ?float
    {
        return $this->varPercent;
    }

    public function setVarPercent(float $varPercent): self
    {
        $this->varPercent = $varPercent;

        return $this;
    }

    public function getVarMinPercent(): ?float
    {
        return $this->varMinPercent;
    }

    public function setVarMinPercent(float $varMinPercent): self
    {
        $this->varMinPercent = $varMinPercent;

        return $this;
    }


}
