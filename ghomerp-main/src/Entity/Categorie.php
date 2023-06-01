<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Categorie
 * @ApiResource()
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="rowid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rowid;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }
	
	/**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=180, nullable=false)
     */
    private $label;
	/**
     * @var string
     *
     * @ORM\Column(name="ref_ext", type="string", length=255, nullable=true)
     */
    private $refExt;
	/**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=30, nullable=true)
     */
    private $description;
	/**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=8, nullable=true)
     */
    private $color;
	/**
     * @var string
     *
     * @ORM\Column(name="import_key", type="string", length=30, nullable=true)
     */
    private $importKey;
	/*********************************************************************************/
	/**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;
	/**
     * @var int
     *
     * @ORM\Column(name="fk_parent", type="integer", nullable=false, options={"default"="0"})
     */
    private $fkParent = 0;
	/**
     * @var int
     *
     * @ORM\Column(name="type", type="integer", nullable=false, options={"default"="1"})
     */
    private $type = 1;
	/**
     * @var int
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=true, options={"default"=null})
     */
    private $fkSoc;
	/**
     * @var int
     *
     * @ORM\Column(name="visible", type="integer", nullable=false, options={"default"="1"})
     */
    private $visible = 1;
	/**
     * @var int
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=true, options={"default"=null})
     */
    private $fkUserCreat ;
	/**
     * @var int
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true, options={"default"=null})
     */
    private $fkUserModif ;
	/**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;
	/**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getRefExt(): ?string
    {
        return $this->refExt;
    }

    public function setRefExt(?string $refExt): self
    {
        $this->refExt = $refExt;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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

    public function getImportKey(): ?string
    {
        return $this->importKey;
    }

    public function setImportKey(?string $importKey): self
    {
        $this->importKey = $importKey;

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

    public function getFkParent(): ?int
    {
        return $this->fkParent;
    }

    public function setFkParent(int $fkParent): self
    {
        $this->fkParent = $fkParent;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getFkSoc(): ?int
    {
        return $this->fkSoc;
    }

    public function setFkSoc(?int $fkSoc): self
    {
        $this->fkSoc = $fkSoc;

        return $this;
    }

    public function getVisible(): ?int
    {
        return $this->visible;
    }

    public function setVisible(int $visible): self
    {
        $this->visible = $visible;

        return $this;
    }

    public function getFkUserCreat(): ?int
    {
        return $this->fkUserCreat;
    }

    public function setFkUserCreat(?int $fkUserCreat): self
    {
        $this->fkUserCreat = $fkUserCreat;

        return $this;
    }

    public function getFkUserModif(): ?int
    {
        return $this->fkUserModif;
    }

    public function setFkUserModif(?int $fkUserModif): self
    {
        $this->fkUserModif = $fkUserModif;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(?\DateTimeInterface $dateCreation): self
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
}
