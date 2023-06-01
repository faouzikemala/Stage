<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpensereportIk
 *
 * @ORM\Table(name="expensereport_ik")
 * @ORM\Entity
 */
class ExpensereportIk
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
     * @var int
     *
     * @ORM\Column(name="fk_c_exp_tax_cat", type="integer", nullable=false)
     */
    private $fkCExpTaxCat = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_range", type="integer", nullable=false)
     */
    private $fkRange = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="coef", type="float", precision=10, scale=0, nullable=false)
     */
    private $coef = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ikoffset", type="float", precision=10, scale=0, nullable=false)
     */
    private $ikoffset = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="active", type="integer", nullable=true, options={"default"="1"})
     */
    private $active = 1;

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function getFkCExpTaxCat(): ?int
    {
        return $this->fkCExpTaxCat;
    }

    public function setFkCExpTaxCat(int $fkCExpTaxCat): self
    {
        $this->fkCExpTaxCat = $fkCExpTaxCat;

        return $this;
    }

    public function getFkRange(): ?int
    {
        return $this->fkRange;
    }

    public function setFkRange(int $fkRange): self
    {
        $this->fkRange = $fkRange;

        return $this;
    }

    public function getCoef(): ?float
    {
        return $this->coef;
    }

    public function setCoef(float $coef): self
    {
        $this->coef = $coef;

        return $this;
    }

    public function getIkoffset(): ?float
    {
        return $this->ikoffset;
    }

    public function setIkoffset(float $ikoffset): self
    {
        $this->ikoffset = $ikoffset;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(?int $active): self
    {
        $this->active = $active;

        return $this;
    }


}
