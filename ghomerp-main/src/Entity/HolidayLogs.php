<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HolidayLogs
 *
 * @ORM\Table(name="holiday_logs")
 * @ORM\Entity
 */
class HolidayLogs
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_action", type="datetime", nullable=false)
     */
    private $dateAction;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_action", type="integer", nullable=false)
     */
    private $fkUserAction;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_update", type="integer", nullable=false)
     */
    private $fkUserUpdate;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_type", type="integer", nullable=false)
     */
    private $fkType;

    /**
     * @var string
     *
     * @ORM\Column(name="type_action", type="string", length=255, nullable=false)
     */
    private $typeAction;

    /**
     * @var string
     *
     * @ORM\Column(name="prev_solde", type="string", length=255, nullable=false)
     */
    private $prevSolde;

    /**
     * @var string
     *
     * @ORM\Column(name="new_solde", type="string", length=255, nullable=false)
     */
    private $newSolde;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getDateAction(): ?\DateTimeInterface
    {
        return $this->dateAction;
    }

    public function setDateAction(\DateTimeInterface $dateAction): self
    {
        $this->dateAction = $dateAction;

        return $this;
    }

    public function getFkUserAction(): ?int
    {
        return $this->fkUserAction;
    }

    public function setFkUserAction(int $fkUserAction): self
    {
        $this->fkUserAction = $fkUserAction;

        return $this;
    }

    public function getFkUserUpdate(): ?int
    {
        return $this->fkUserUpdate;
    }

    public function setFkUserUpdate(int $fkUserUpdate): self
    {
        $this->fkUserUpdate = $fkUserUpdate;

        return $this;
    }

    public function getFkType(): ?int
    {
        return $this->fkType;
    }

    public function setFkType(int $fkType): self
    {
        $this->fkType = $fkType;

        return $this;
    }

    public function getTypeAction(): ?string
    {
        return $this->typeAction;
    }

    public function setTypeAction(string $typeAction): self
    {
        $this->typeAction = $typeAction;

        return $this;
    }

    public function getPrevSolde(): ?string
    {
        return $this->prevSolde;
    }

    public function setPrevSolde(string $prevSolde): self
    {
        $this->prevSolde = $prevSolde;

        return $this;
    }

    public function getNewSolde(): ?string
    {
        return $this->newSolde;
    }

    public function setNewSolde(string $newSolde): self
    {
        $this->newSolde = $newSolde;

        return $this;
    }


}
