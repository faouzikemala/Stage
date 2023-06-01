<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElementElement
 *
 * @ORM\Table(name="element_element", uniqueConstraints={@ORM\UniqueConstraint(name="idx_element_element_idx1", columns={"fk_source", "sourcetype", "fk_target", "targettype"})}, indexes={@ORM\Index(name="idx_element_element_fk_target", columns={"fk_target"})})
 * @ORM\Entity
 */
class ElementElement
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
     * @ORM\Column(name="fk_source", type="integer", nullable=false)
     */
    private $fkSource;

    /**
     * @var string
     *
     * @ORM\Column(name="sourcetype", type="string", length=32, nullable=false)
     */
    private $sourcetype;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_target", type="integer", nullable=false)
     */
    private $fkTarget;

    /**
     * @var string
     *
     * @ORM\Column(name="targettype", type="string", length=32, nullable=false)
     */
    private $targettype;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkSource(): ?int
    {
        return $this->fkSource;
    }

    public function setFkSource(int $fkSource): self
    {
        $this->fkSource = $fkSource;

        return $this;
    }

    public function getSourcetype(): ?string
    {
        return $this->sourcetype;
    }

    public function setSourcetype(string $sourcetype): self
    {
        $this->sourcetype = $sourcetype;

        return $this;
    }

    public function getFkTarget(): ?int
    {
        return $this->fkTarget;
    }

    public function setFkTarget(int $fkTarget): self
    {
        $this->fkTarget = $fkTarget;

        return $this;
    }

    public function getTargettype(): ?string
    {
        return $this->targettype;
    }

    public function setTargettype(string $targettype): self
    {
        $this->targettype = $targettype;

        return $this;
    }


}
