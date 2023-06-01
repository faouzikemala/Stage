<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * CategorieLang
 * @ApiResource()
 * @ORM\Table(name="categorie_lang", uniqueConstraints={@ORM\UniqueConstraint(name="uk_category_lang", columns={"fk_category", "lang"})}, indexes={@ORM\Index(name="IDX_4620033534645A1F", columns={"fk_category"})})
 * @ORM\Entity
 */
class CategorieLang
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
     * @var string
     *
     * @ORM\Column(name="lang", type="string", length=5, nullable=false)
     */
    private $lang = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_category", referencedColumnName="rowid")
     * })
     */
    private $fkCategory;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

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

    public function getFkCategory(): ?Categorie
    {
        return $this->fkCategory;
    }

    public function setFkCategory(?Categorie $fkCategory): self
    {
        $this->fkCategory = $fkCategory;

        return $this;
    }


}
