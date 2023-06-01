<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElementResources
 *
 * @ORM\Table(name="element_resources", uniqueConstraints={@ORM\UniqueConstraint(name="idx_element_resources_idx1", columns={"resource_id", "resource_type", "element_id", "element_type"})}, indexes={@ORM\Index(name="idx_element_element_element_id", columns={"element_id"})})
 * @ORM\Entity
 */
class ElementResources
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
     * @ORM\Column(name="element_id", type="integer", nullable=true)
     */
    private $elementId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="element_type", type="string", length=64, nullable=true)
     */
    private $elementType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="resource_id", type="integer", nullable=true)
     */
    private $resourceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resource_type", type="string", length=64, nullable=true)
     */
    private $resourceType;

    /**
     * @var int|null
     *
     * @ORM\Column(name="busy", type="integer", nullable=true)
     */
    private $busy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="mandatory", type="integer", nullable=true)
     */
    private $mandatory;

    /**
     * @var float|null
     *
     * @ORM\Column(name="duree", type="float", precision=10, scale=0, nullable=true)
     */
    private $duree;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_create", type="integer", nullable=true)
     */
    private $fkUserCreate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getElementId(): ?int
    {
        return $this->elementId;
    }

    public function setElementId(?int $elementId): self
    {
        $this->elementId = $elementId;

        return $this;
    }

    public function getElementType(): ?string
    {
        return $this->elementType;
    }

    public function setElementType(?string $elementType): self
    {
        $this->elementType = $elementType;

        return $this;
    }

    public function getResourceId(): ?int
    {
        return $this->resourceId;
    }

    public function setResourceId(?int $resourceId): self
    {
        $this->resourceId = $resourceId;

        return $this;
    }

    public function getResourceType(): ?string
    {
        return $this->resourceType;
    }

    public function setResourceType(?string $resourceType): self
    {
        $this->resourceType = $resourceType;

        return $this;
    }

    public function getBusy(): ?int
    {
        return $this->busy;
    }

    public function setBusy(?int $busy): self
    {
        $this->busy = $busy;

        return $this;
    }

    public function getMandatory(): ?int
    {
        return $this->mandatory;
    }

    public function setMandatory(?int $mandatory): self
    {
        $this->mandatory = $mandatory;

        return $this;
    }

    public function getDuree(): ?float
    {
        return $this->duree;
    }

    public function setDuree(?float $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getFkUserCreate(): ?int
    {
        return $this->fkUserCreate;
    }

    public function setFkUserCreate(?int $fkUserCreate): self
    {
        $this->fkUserCreate = $fkUserCreate;

        return $this;
    }

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(?\DateTimeInterface $tms): self
    {
        $this->tms = $tms;

        return $this;
    }


}
