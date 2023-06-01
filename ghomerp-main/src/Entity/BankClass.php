<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BankClass
 *
 * @ORM\Table(name="bank_class", uniqueConstraints={@ORM\UniqueConstraint(name="uk_bank_class_lineid", columns={"lineid", "fk_categ"})})
 * @ORM\Entity
 */
class BankClass
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
     * @ORM\Column(name="lineid", type="integer", nullable=false)
     */
    private $lineid;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_categ", type="integer", nullable=false)
     */
    private $fkCateg;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLineid(): ?int
    {
        return $this->lineid;
    }

    public function setLineid(int $lineid): self
    {
        $this->lineid = $lineid;

        return $this;
    }

    public function getFkCateg(): ?int
    {
        return $this->fkCateg;
    }

    public function setFkCateg(int $fkCateg): self
    {
        $this->fkCateg = $fkCateg;

        return $this;
    }


}
