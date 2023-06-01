<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TakeposFloorTables
 *
 * @ORM\Table(name="takepos_floor_tables")
 * @ORM\Entity
 */
class TakeposFloorTables
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
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @var float|null
     *
     * @ORM\Column(name="leftpos", type="float", precision=10, scale=0, nullable=true)
     */
    private $leftpos;

    /**
     * @var float|null
     *
     * @ORM\Column(name="toppos", type="float", precision=10, scale=0, nullable=true)
     */
    private $toppos;

    /**
     * @var int|null
     *
     * @ORM\Column(name="floor", type="smallint", nullable=true)
     */
    private $floor;

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getLeftpos(): ?float
    {
        return $this->leftpos;
    }

    public function setLeftpos(?float $leftpos): self
    {
        $this->leftpos = $leftpos;

        return $this;
    }

    public function getToppos(): ?float
    {
        return $this->toppos;
    }

    public function setToppos(?float $toppos): self
    {
        $this->toppos = $toppos;

        return $this;
    }

    public function getFloor(): ?int
    {
        return $this->floor;
    }

    public function setFloor(?int $floor): self
    {
        $this->floor = $floor;

        return $this;
    }


}
