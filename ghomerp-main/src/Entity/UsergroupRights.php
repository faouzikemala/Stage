<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsergroupRights
 *
 * @ORM\Table(name="usergroup_rights", uniqueConstraints={@ORM\UniqueConstraint(name="uk_usergroup_rights", columns={"entity", "fk_usergroup", "fk_id"})}, indexes={@ORM\Index(name="fk_usergroup_rights_fk_usergroup", columns={"fk_usergroup"})})
 * @ORM\Entity
 */
class UsergroupRights
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

    public function getFkId(): ?int
    {
        return $this->fkId;
    }

    public function setFkId(int $fkId): self
    {
        $this->fkId = $fkId;

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
