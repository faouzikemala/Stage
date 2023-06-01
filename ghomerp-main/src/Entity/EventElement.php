<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventElement
 *
 * @ORM\Table(name="event_element")
 * @ORM\Entity
 */
class EventElement
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
