<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductAttributeValue
 *
 * @ORM\Table(name="product_attribute_value", uniqueConstraints={@ORM\UniqueConstraint(name="uk_product_attribute_value", columns={"fk_product_attribute", "ref"})})
 * @ORM\Entity
 */
class ProductAttributeValue
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
     * @ORM\Column(name="fk_product_attribute", type="integer", nullable=false)
     */
    private $fkProductAttribute;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref", type="string", length=180, nullable=true)
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getFkProductAttribute(): ?int
    {
        return $this->fkProductAttribute;
    }

    public function setFkProductAttribute(int $fkProductAttribute): self
    {
        $this->fkProductAttribute = $fkProductAttribute;

        return $this;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(?string $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
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


}
