<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsergroupUser
 *
 * @ORM\Table(name="usergroup_user", uniqueConstraints={@ORM\UniqueConstraint(name="uk_usergroup_user", columns={"entity", "fk_user", "fk_usergroup"})}, indexes={@ORM\Index(name="fk_usergroup_user_fk_user", columns={"fk_user"}), @ORM\Index(name="fk_usergroup_user_fk_usergroup", columns={"fk_usergroup"})})
 * @ORM\Entity
 */
class UsergroupUser
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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user", referencedColumnName="rowid")
     * })
     */
    private $fkUser;

    /**
     * @var \Usergroup
     *
     * @ORM\ManyToOne(targetEntity="Usergroup")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_usergroup", referencedColumnName="rowid")
     * })
     */
    private $fkUsergroup;

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

    public function getFkUser(): ?User
    {
        return $this->fkUser;
    }

    public function setFkUser(?User $fkUser): self
    {
        $this->fkUser = $fkUser;

        return $this;
    }

    public function getFkUsergroup(): ?Usergroup
    {
        return $this->fkUsergroup;
    }

    public function setFkUsergroup(?Usergroup $fkUsergroup): self
    {
        $this->fkUsergroup = $fkUsergroup;

        return $this;
    }


}
