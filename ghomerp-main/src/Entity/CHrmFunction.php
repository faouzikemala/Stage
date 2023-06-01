<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * CHrmFunction
 * @ApiResource()
 * @ORM\Table(name="c_hrm_function")
 * @ORM\Entity
 */
class CHrmFunction
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
     * @var bool
     *
     * @ORM\Column(name="pos", type="boolean", nullable=false)
     */
    private $pos = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=16, nullable=false)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=50, nullable=true)
     */
    private $label;

    /**
     * @var bool
     *
     * @ORM\Column(name="c_level", type="boolean", nullable=false)
     */
    private $cLevel = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $active = true;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getPos(): ?bool
    {
        return $this->pos;
    }

    public function setPos(bool $pos): self
    {
        $this->pos = $pos;

        return $this;
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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getCLevel(): ?bool
    {
        return $this->cLevel;
    }

    public function setCLevel(bool $cLevel): self
    {
        $this->cLevel = $cLevel;

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


}
