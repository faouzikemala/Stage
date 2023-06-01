<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boxes
 *
 * @ORM\Table(name="boxes", uniqueConstraints={@ORM\UniqueConstraint(name="uk_boxes", columns={"entity", "box_id", "position", "fk_user"})}, indexes={@ORM\Index(name="idx_boxes_fk_user", columns={"fk_user"}), @ORM\Index(name="idx_boxes_boxid", columns={"box_id"})})
 * @ORM\Entity
 */
class Boxes
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
     * @var int
     *
     * @ORM\Column(name="position", type="smallint", nullable=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="box_order", type="string", length=3, nullable=false)
     */
    private $boxOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     */
    private $fkUser = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="maxline", type="integer", nullable=true)
     */
    private $maxline;

    /**
     * @var string|null
     *
     * @ORM\Column(name="params", type="string", length=255, nullable=true)
     */
    private $params;

    /**
     * @var \BoxesDef
     *
     * @ORM\ManyToOne(targetEntity="BoxesDef")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="box_id", referencedColumnName="rowid")
     * })
     */
    private $box;

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

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getBoxOrder(): ?string
    {
        return $this->boxOrder;
    }

    public function setBoxOrder(string $boxOrder): self
    {
        $this->boxOrder = $boxOrder;

        return $this;
    }

    public function getFkUser(): ?int
    {
        return $this->fkUser;
    }

    public function setFkUser(int $fkUser): self
    {
        $this->fkUser = $fkUser;

        return $this;
    }

    public function getMaxline(): ?int
    {
        return $this->maxline;
    }

    public function setMaxline(?int $maxline): self
    {
        $this->maxline = $maxline;

        return $this;
    }

    public function getParams(): ?string
    {
        return $this->params;
    }

    public function setParams(?string $params): self
    {
        $this->params = $params;

        return $this;
    }

    public function getBox(): ?BoxesDef
    {
        return $this->box;
    }

    public function setBox(?BoxesDef $box): self
    {
        $this->box = $box;

        return $this;
    }


}
