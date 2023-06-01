<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkstationWorkstationResource
 *
 * @ORM\Table(name="workstation_workstation_resource")
 * @ORM\Entity
 */
class WorkstationWorkstationResource
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
     * @ORM\Column(name="tms", type="datetime", nullable=true)
     */
    private $tms;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_resource", type="integer", nullable=true)
     */
    private $fkResource;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_workstation", type="integer", nullable=true)
     */
    private $fkWorkstation;

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function getFkResource(): ?int
    {
        return $this->fkResource;
    }

    public function setFkResource(?int $fkResource): self
    {
        $this->fkResource = $fkResource;

        return $this;
    }

    public function getFkWorkstation(): ?int
    {
        return $this->fkWorkstation;
    }

    public function setFkWorkstation(?int $fkWorkstation): self
    {
        $this->fkWorkstation = $fkWorkstation;

        return $this;
    }


}
