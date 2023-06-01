<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OverwriteTrans
 *
 * @ORM\Table(name="overwrite_trans", uniqueConstraints={@ORM\UniqueConstraint(name="uk_overwrite_trans", columns={"lang", "transkey"})})
 * @ORM\Entity
 */
class OverwriteTrans
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
     * @ORM\Column(name="lang", type="string", length=5, nullable=true)
     */
    private $lang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transkey", type="string", length=128, nullable=true)
     */
    private $transkey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="transvalue", type="text", length=65535, nullable=true)
     */
    private $transvalue;

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

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(?string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getTranskey(): ?string
    {
        return $this->transkey;
    }

    public function setTranskey(?string $transkey): self
    {
        $this->transkey = $transkey;

        return $this;
    }

    public function getTransvalue(): ?string
    {
        return $this->transvalue;
    }

    public function setTransvalue(?string $transvalue): self
    {
        $this->transvalue = $transvalue;

        return $this;
    }


}
