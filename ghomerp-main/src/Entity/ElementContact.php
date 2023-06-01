<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElementContact
 *
 * @ORM\Table(name="element_contact", uniqueConstraints={@ORM\UniqueConstraint(name="idx_element_contact_idx1", columns={"element_id", "fk_c_type_contact", "fk_socpeople"})}, indexes={@ORM\Index(name="fk_element_contact_fk_c_type_contact", columns={"fk_c_type_contact"}), @ORM\Index(name="idx_element_contact_fk_socpeople", columns={"fk_socpeople"})})
 * @ORM\Entity
 */
class ElementContact
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="datecreate", type="datetime", nullable=true)
     */
    private $datecreate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="statut", type="smallint", nullable=true, options={"default"="5"})
     */
    private $statut = '5';

    /**
     * @var int
     *
     * @ORM\Column(name="element_id", type="integer", nullable=false)
     */
    private $elementId;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_socpeople", type="integer", nullable=false)
     */
    private $fkSocpeople;

    /**
     * @var \CTypeContact
     *
     * @ORM\ManyToOne(targetEntity="CTypeContact")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_c_type_contact", referencedColumnName="rowid")
     * })
     */
    private $fkCTypeContact;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getDatecreate(): ?\DateTimeInterface
    {
        return $this->datecreate;
    }

    public function setDatecreate(?\DateTimeInterface $datecreate): self
    {
        $this->datecreate = $datecreate;

        return $this;
    }

    public function getStatut(): ?int
    {
        return $this->statut;
    }

    public function setStatut(?int $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getElementId(): ?int
    {
        return $this->elementId;
    }

    public function setElementId(int $elementId): self
    {
        $this->elementId = $elementId;

        return $this;
    }

    public function getFkSocpeople(): ?int
    {
        return $this->fkSocpeople;
    }

    public function setFkSocpeople(int $fkSocpeople): self
    {
        $this->fkSocpeople = $fkSocpeople;

        return $this;
    }

    public function getFkCTypeContact(): ?CTypeContact
    {
        return $this->fkCTypeContact;
    }

    public function setFkCTypeContact(?CTypeContact $fkCTypeContact): self
    {
        $this->fkCTypeContact = $fkCTypeContact;

        return $this;
    }


}
