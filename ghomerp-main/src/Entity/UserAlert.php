<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAlert
 *
 * @ORM\Table(name="user_alert")
 * @ORM\Entity
 */
class UserAlert
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
     * @var int|null
     *
     * @ORM\Column(name="type", type="integer", nullable=true)
     */
    private $type;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_contact", type="integer", nullable=true)
     */
    private $fkContact;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(?int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getFkContact(): ?int
    {
        return $this->fkContact;
    }

    public function setFkContact(?int $fkContact): self
    {
        $this->fkContact = $fkContact;

        return $this;
    }

    public function getFkUser(): ?int
    {
        return $this->fkUser;
    }

    public function setFkUser(?int $fkUser): self
    {
        $this->fkUser = $fkUser;

        return $this;
    }


}
