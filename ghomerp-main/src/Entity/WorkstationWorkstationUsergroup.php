<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkstationWorkstationUsergroup
 *
 * @ORM\Table(name="workstation_workstation_usergroup")
 * @ORM\Entity
 */
class WorkstationWorkstationUsergroup
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
     * @ORM\Column(name="fk_usergroup", type="integer", nullable=true)
     */
    private $fkUsergroup;

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

    public function getFkUsergroup(): ?int
    {
        return $this->fkUsergroup;
    }

    public function setFkUsergroup(?int $fkUsergroup): self
    {
        $this->fkUsergroup = $fkUsergroup;

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
