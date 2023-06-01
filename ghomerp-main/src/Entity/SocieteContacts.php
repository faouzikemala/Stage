<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocieteContacts
 *
 * @ORM\Table(name="societe_contacts", uniqueConstraints={@ORM\UniqueConstraint(name="idx_societe_contacts_idx1", columns={"entity", "fk_soc", "fk_c_type_contact", "fk_socpeople"})}, indexes={@ORM\Index(name="fk_societe_contacts_fk_soc", columns={"fk_soc"}), @ORM\Index(name="fk_societe_contacts_fk_c_type_contact", columns={"fk_c_type_contact"}), @ORM\Index(name="fk_societe_contacts_fk_socpeople", columns={"fk_socpeople"})})
 * @ORM\Entity
 */
class SocieteContacts
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true)
     */
    private $tms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var \CTypeContact
     *
     * @ORM\ManyToOne(targetEntity="CTypeContact")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_c_type_contact", referencedColumnName="rowid")
     * })
     */
    private $fkCTypeContact;

    /**
     * @var \Societe
     *
     * @ORM\ManyToOne(targetEntity="Societe")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_soc", referencedColumnName="rowid")
     * })
     */
    private $fkSoc;

    /**
     * @var \Socpeople
     *
     * @ORM\ManyToOne(targetEntity="Socpeople")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_socpeople", referencedColumnName="rowid")
     * })
     */
    private $fkSocpeople;

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

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

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

    public function getImportKey(): ?string
    {
        return $this->importKey;
    }

    public function setImportKey(?string $importKey): self
    {
        $this->importKey = $importKey;

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

    public function getFkSoc(): ?Societe
    {
        return $this->fkSoc;
    }

    public function setFkSoc(?Societe $fkSoc): self
    {
        $this->fkSoc = $fkSoc;

        return $this;
    }

    public function getFkSocpeople(): ?Socpeople
    {
        return $this->fkSocpeople;
    }

    public function setFkSocpeople(?Socpeople $fkSocpeople): self
    {
        $this->fkSocpeople = $fkSocpeople;

        return $this;
    }


}
