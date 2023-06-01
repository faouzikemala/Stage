<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Expeditiondet
 *
 * @ORM\Table(name="expeditiondet", indexes={@ORM\Index(name="idx_expeditiondet_fk_origin_line", columns={"fk_origin_line"}), @ORM\Index(name="idx_expeditiondet_fk_expedition", columns={"fk_expedition"})})
 * @ORM\Entity
 */
class Expeditiondet
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
     * @var int|null
     *
     * @ORM\Column(name="fk_origin_line", type="integer", nullable=true)
     */
    private $fkOriginLine;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_entrepot", type="integer", nullable=true)
     */
    private $fkEntrepot;

    /**
     * @var float|null
     *
     * @ORM\Column(name="qty", type="float", precision=10, scale=0, nullable=true)
     */
    private $qty;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rang", type="integer", nullable=true)
     */
    private $rang = '0';

    /**
     * @var \Expedition
     *
     * @ORM\ManyToOne(targetEntity="Expedition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_expedition", referencedColumnName="rowid")
     * })
     */
    private $fkExpedition;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkOriginLine(): ?int
    {
        return $this->fkOriginLine;
    }

    public function setFkOriginLine(?int $fkOriginLine): self
    {
        $this->fkOriginLine = $fkOriginLine;

        return $this;
    }

    public function getFkEntrepot(): ?int
    {
        return $this->fkEntrepot;
    }

    public function setFkEntrepot(?int $fkEntrepot): self
    {
        $this->fkEntrepot = $fkEntrepot;

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

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(?int $rang): self
    {
        $this->rang = $rang;

        return $this;
    }

    public function getFkExpedition(): ?Expedition
    {
        return $this->fkExpedition;
    }

    public function setFkExpedition(?Expedition $fkExpedition): self
    {
        $this->fkExpedition = $fkExpedition;

        return $this;
    }


}
