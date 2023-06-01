<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HolidayUsers
 *
 * @ORM\Table(name="holiday_users", uniqueConstraints={@ORM\UniqueConstraint(name="uk_holiday_users", columns={"fk_user", "fk_type"})})
 * @ORM\Entity
 */
class HolidayUsers
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=false)
     */
    private $fkUser;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_type", type="integer", nullable=false)
     */
    private $fkType;

    /**
     * @var float
     *
     * @ORM\Column(name="nb_holiday", type="float", precision=10, scale=0, nullable=false)
     */
    private $nbHoliday = '0';

    public function getId(): ?int
    {
        return $this->id;
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

    public function getFkType(): ?int
    {
        return $this->fkType;
    }

    public function setFkType(int $fkType): self
    {
        $this->fkType = $fkType;

        return $this;
    }

    public function getNbHoliday(): ?float
    {
        return $this->nbHoliday;
    }

    public function setNbHoliday(float $nbHoliday): self
    {
        $this->nbHoliday = $nbHoliday;

        return $this;
    }


}
