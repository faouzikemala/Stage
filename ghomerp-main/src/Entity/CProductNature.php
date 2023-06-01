<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CProductNature
 *
 * @ORM\Table(name="c_product_nature", uniqueConstraints={@ORM\UniqueConstraint(name="uk_c_product_nature", columns={"code"})})
 * @ORM\Entity
 */
class CProductNature
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
     * @ORM\Column(name="code", type="boolean", nullable=false)
     */
    private $code;

    /**
     * @var string|null
     *
     * @ORM\Column(name="label", type="string", length=100, nullable=true)
     */
    private $label;

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

    public function getCode(): ?bool
    {
        return $this->code;
    }

    public function setCode(bool $code): self
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
