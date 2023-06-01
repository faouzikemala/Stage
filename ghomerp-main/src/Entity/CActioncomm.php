<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CActioncomm
 *
 * @ORM\Table(name="c_actioncomm", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_actioncomm", columns={"code"})})
 * @ORM\Entity
 */
class CActioncomm
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
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=50, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=false, options={"default"="system"})
     */
    private $type = 'system';

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=48, nullable=false)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=50, nullable=true)
     */
    private $module;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="todo", type="boolean", nullable=true)
     */
    private $todo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=9, nullable=true)
     */
    private $color;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picto", type="string", length=48, nullable=true)
     */
    private $picto;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getModule(): ?string
    {
        return $this->module;
    }

    public function setModule(?string $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getTodo(): ?bool
    {
        return $this->todo;
    }

    public function setTodo(?bool $todo): self
    {
        $this->todo = $todo;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getPicto(): ?string
    {
        return $this->picto;
    }

    public function setPicto(?string $picto): self
    {
        $this->picto = $picto;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }


}
