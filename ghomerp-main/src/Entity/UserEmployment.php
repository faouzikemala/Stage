<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserEmployment
 *
 * @ORM\Table(name="user_employment", uniqueConstraints={@ORM\UniqueConstraint(name="uk_user_employment", columns={"ref", "entity"})}, indexes={@ORM\Index(name="fk_user_employment_fk_user", columns={"fk_user"})})
 * @ORM\Entity
 */
class UserEmployment
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
     * @ORM\Column(name="ref", type="string", length=50, nullable=true)
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_ext", type="string", length=50, nullable=true)
     */
    private $refExt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=true)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="job", type="string", length=128, nullable=true)
     */
    private $job;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     */
    private $status;

    /**
     * @var float|null
     *
     * @ORM\Column(name="salary", type="float", precision=24, scale=8, nullable=true)
     */
    private $salary;

    /**
     * @var float|null
     *
     * @ORM\Column(name="salaryextra", type="float", precision=24, scale=8, nullable=true)
     */
    private $salaryextra;

    /**
     * @var float|null
     *
     * @ORM\Column(name="weeklyhours", type="float", precision=16, scale=8, nullable=true)
     */
    private $weeklyhours;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateemployment", type="date", nullable=true)
     */
    private $dateemployment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateemploymentend", type="date", nullable=true)
     */
    private $dateemploymentend;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user", referencedColumnName="rowid")
     * })
     */
    private $fkUser;

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

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(?string $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getRefExt(): ?string
    {
        return $this->refExt;
    }

    public function setRefExt(?string $refExt): self
    {
        $this->refExt = $refExt;

        return $this;
    }

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(?\DateTimeInterface $datec): self
    {
        $this->datec = $datec;

        return $this;
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

    public function getFkUserCreat(): ?int
    {
        return $this->fkUserCreat;
    }

    public function setFkUserCreat(?int $fkUserCreat): self
    {
        $this->fkUserCreat = $fkUserCreat;

        return $this;
    }

    public function getFkUserModif(): ?int
    {
        return $this->fkUserModif;
    }

    public function setFkUserModif(?int $fkUserModif): self
    {
        $this->fkUserModif = $fkUserModif;

        return $this;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(?string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getSalary(): ?float
    {
        return $this->salary;
    }

    public function setSalary(?float $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getSalaryextra(): ?float
    {
        return $this->salaryextra;
    }

    public function setSalaryextra(?float $salaryextra): self
    {
        $this->salaryextra = $salaryextra;

        return $this;
    }

    public function getWeeklyhours(): ?float
    {
        return $this->weeklyhours;
    }

    public function setWeeklyhours(?float $weeklyhours): self
    {
        $this->weeklyhours = $weeklyhours;

        return $this;
    }

    public function getDateemployment(): ?\DateTimeInterface
    {
        return $this->dateemployment;
    }

    public function setDateemployment(?\DateTimeInterface $dateemployment): self
    {
        $this->dateemployment = $dateemployment;

        return $this;
    }

    public function getDateemploymentend(): ?\DateTimeInterface
    {
        return $this->dateemploymentend;
    }

    public function setDateemploymentend(?\DateTimeInterface $dateemploymentend): self
    {
        $this->dateemploymentend = $dateemploymentend;

        return $this;
    }

    public function getFkUser(): ?User
    {
        return $this->fkUser;
    }

    public function setFkUser(?User $fkUser): self
    {
        $this->fkUser = $fkUser;

        return $this;
    }


}
