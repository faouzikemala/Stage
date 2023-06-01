<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * WebsitePage
 *
 * @ORM\Table(name="website_page", uniqueConstraints={@ORM\UniqueConstraint(name="uk_website_page_url", columns={"fk_website", "pageurl"})}, indexes={@ORM\Index(name="IDX_160F5F54B74060CB", columns={"fk_website"})})
 * @ORM\Entity
 */
class WebsitePage
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
     * @ORM\Column(name="type_container", type="string", length=16, nullable=false, options={"default"="page"})
     */
    private $typeContainer = 'page';

    /**
     * @var string
     *
     * @ORM\Column(name="pageurl", type="string", length=255, nullable=false)
     */
    private $pageurl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aliasalt", type="string", length=255, nullable=true)
     */
    private $aliasalt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string|null
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=true)
     */
    private $keywords;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang", type="string", length=6, nullable=true)
     */
    private $lang;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_page", type="integer", nullable=true)
     */
    private $fkPage;

    /**
     * @var int|null
     *
     * @ORM\Column(name="allowed_in_frames", type="integer", nullable=true)
     */
    private $allowedInFrames = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="htmlheader", type="text", length=65535, nullable=true)
     */
    private $htmlheader;

    /**
     * @var string|null
     *
     * @ORM\Column(name="content", type="text", length=16777215, nullable=true)
     */
    private $content;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true, options={"default"="1"})
     */
    private $status = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="grabbed_from", type="string", length=255, nullable=true)
     */
    private $grabbedFrom;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=true)
     */
    private $fkUserCreat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var string|null
     *
     * @ORM\Column(name="author_alias", type="string", length=64, nullable=true)
     */
    private $authorAlias;

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

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="object_type", type="string", length=255, nullable=true)
     */
    private $objectType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fk_object", type="string", length=255, nullable=true)
     */
    private $fkObject;

    /**
     * @var \Website
     *
     * @ORM\ManyToOne(targetEntity="Website")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_website", referencedColumnName="rowid")
     * })
     */
    private $fkWebsite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Categorie", mappedBy="fkWebsitePage")
     */
    private $fkCategorie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkCategorie = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getTypeContainer(): ?string
    {
        return $this->typeContainer;
    }

    public function setTypeContainer(string $typeContainer): self
    {
        $this->typeContainer = $typeContainer;

        return $this;
    }

    public function getPageurl(): ?string
    {
        return $this->pageurl;
    }

    public function setPageurl(string $pageurl): self
    {
        $this->pageurl = $pageurl;

        return $this;
    }

    public function getAliasalt(): ?string
    {
        return $this->aliasalt;
    }

    public function setAliasalt(?string $aliasalt): self
    {
        $this->aliasalt = $aliasalt;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

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

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(?string $lang): self
    {
        $this->lang = $lang;

        return $this;
    }

    public function getFkPage(): ?int
    {
        return $this->fkPage;
    }

    public function setFkPage(?int $fkPage): self
    {
        $this->fkPage = $fkPage;

        return $this;
    }

    public function getAllowedInFrames(): ?int
    {
        return $this->allowedInFrames;
    }

    public function setAllowedInFrames(?int $allowedInFrames): self
    {
        $this->allowedInFrames = $allowedInFrames;

        return $this;
    }

    public function getHtmlheader(): ?string
    {
        return $this->htmlheader;
    }

    public function setHtmlheader(?string $htmlheader): self
    {
        $this->htmlheader = $htmlheader;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getGrabbedFrom(): ?string
    {
        return $this->grabbedFrom;
    }

    public function setGrabbedFrom(?string $grabbedFrom): self
    {
        $this->grabbedFrom = $grabbedFrom;

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

    public function getAuthorAlias(): ?string
    {
        return $this->authorAlias;
    }

    public function setAuthorAlias(?string $authorAlias): self
    {
        $this->authorAlias = $authorAlias;

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

    public function getImportKey(): ?string
    {
        return $this->importKey;
    }

    public function setImportKey(?string $importKey): self
    {
        $this->importKey = $importKey;

        return $this;
    }

    public function getObjectType(): ?string
    {
        return $this->objectType;
    }

    public function setObjectType(?string $objectType): self
    {
        $this->objectType = $objectType;

        return $this;
    }

    public function getFkObject(): ?string
    {
        return $this->fkObject;
    }

    public function setFkObject(?string $fkObject): self
    {
        $this->fkObject = $fkObject;

        return $this;
    }

    public function getFkWebsite(): ?Website
    {
        return $this->fkWebsite;
    }

    public function setFkWebsite(?Website $fkWebsite): self
    {
        $this->fkWebsite = $fkWebsite;

        return $this;
    }

    /**
     * @return Collection|Categorie[]
     */
    public function getFkCategorie(): Collection
    {
        return $this->fkCategorie;
    }

    public function addFkCategorie(Categorie $fkCategorie): self
    {
        if (!$this->fkCategorie->contains($fkCategorie)) {
            $this->fkCategorie[] = $fkCategorie;
            $fkCategorie->addFkWebsitePage($this);
        }

        return $this;
    }

    public function removeFkCategorie(Categorie $fkCategorie): self
    {
        if ($this->fkCategorie->removeElement($fkCategorie)) {
            $fkCategorie->removeFkWebsitePage($this);
        }

        return $this;
    }

}
