<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserRights
 *
 * @ORM\Table(name="user_rights", uniqueConstraints={@ORM\UniqueConstraint(name="uk_user_rights", columns={"entity", "fk_user", "fk_id"})}, indexes={@ORM\Index(name="fk_user_rights_fk_user_user", columns={"fk_user"})})
 * @ORM\Entity
 */
class UserRights
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
     * @ORM\Column(name="fk_id", type="integer", nullable=false)
     */
    private $fkId;

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

    public function getFkId(): ?int
    {
        return $this->fkId;
    }

    public function setFkId(int $fkId): self
    {
        $this->fkId = $fkId;

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
