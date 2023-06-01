<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CProspectlevel
 *
 * @ORM\Table(name="c_prospectlevel")
 * @ORM\Entity
 */
class CProspectlevel
{
    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=30, nullable=true)
     */
    private $label;

    /**
     * @var int|null
     *
     * @ORM\Column(name="sortorder", type="smallint", nullable=true)
     */
    private $sortorder;

    /**
     * @var int
     *
     * @ORM\Column(name="active", type="smallint", nullable=false, options={"default"="1"})
     */
    private $active = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=32, nullable=true)
     */
    private $module;

    public function getCode(): ?string
    {
        return $this->code;
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

    public function getSortorder(): ?int
    {
        return $this->sortorder;
    }

    public function setSortorder(?int $sortorder): self
    {
        $this->sortorder = $sortorder;

        return $this;
    }

    public function getActive(): ?int
    {
        return $this->active;
    }

    public function setActive(int $active): self
    {
        $this->active = $active;

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


}
