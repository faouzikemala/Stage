<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ExpeditionPackage
 *
 * @ORM\Table(name="expedition_package")
 * @ORM\Entity
 */
class ExpeditionPackage
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
     * @ORM\Column(name="fk_expedition", type="integer", nullable=false)
     */
    private $fkExpedition;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var float|null
     *
     * @ORM\Column(name="value", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $value = 0.00000000;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_package_type", type="integer", nullable=true)
     */
    private $fkPackageType;

    /**
     * @var float|null
     *
     * @ORM\Column(name="height", type="float", precision=10, scale=0, nullable=true)
     */
    private $height;

    /**
     * @var float|null
     *
     * @ORM\Column(name="width", type="float", precision=10, scale=0, nullable=true)
     */
    private $width;

    /**
     * @var float|null
     *
     * @ORM\Column(name="size", type="float", precision=10, scale=0, nullable=true)
     */
    private $size;

    /**
     * @var int|null
     *
     * @ORM\Column(name="size_units", type="integer", nullable=true)
     */
    private $sizeUnits;

    /**
     * @var float|null
     *
     * @ORM\Column(name="weight", type="float", precision=10, scale=0, nullable=true)
     */
    private $weight;

    /**
     * @var int|null
     *
     * @ORM\Column(name="weight_units", type="integer", nullable=true)
     */
    private $weightUnits;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dangerous_goods", type="smallint", nullable=true)
     */
    private $dangerousGoods = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="tail_lift", type="smallint", nullable=true)
     */
    private $tailLift = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang = '0';

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkExpedition(): ?int
    {
        return $this->fkExpedition;
    }

    public function setFkExpedition(int $fkExpedition): self
    {
        $this->fkExpedition = $fkExpedition;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getValue(): ?float
    {
        return $this->value;
    }

    public function setValue(?float $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getFkPackageType(): ?int
    {
        return $this->fkPackageType;
    }

    public function setFkPackageType(?int $fkPackageType): self
    {
        $this->fkPackageType = $fkPackageType;

        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): self
    {
        $this->height = $height;

        return $this;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(?float $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getSize(): ?float
    {
        return $this->size;
    }

    public function setSize(?float $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getSizeUnits(): ?int
    {
        return $this->sizeUnits;
    }

    public function setSizeUnits(?int $sizeUnits): self
    {
        $this->sizeUnits = $sizeUnits;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    public function getWeightUnits(): ?int
    {
        return $this->weightUnits;
    }

    public function setWeightUnits(?int $weightUnits): self
    {
        $this->weightUnits = $weightUnits;

        return $this;
    }

    public function getDangerousGoods(): ?int
    {
        return $this->dangerousGoods;
    }

    public function setDangerousGoods(?int $dangerousGoods): self
    {
        $this->dangerousGoods = $dangerousGoods;

        return $this;
    }

    public function getTailLift(): ?int
    {
        return $this->tailLift;
    }

    public function setTailLift(?int $tailLift): self
    {
        $this->tailLift = $tailLift;

        return $this;
    }

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(?int $rang): self
    {
        $this->rang = $rang;

        return $this;
    }


}
