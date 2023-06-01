<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Website
 *
 * @ORM\Table(name="website", uniqueConstraints={@ORM\UniqueConstraint(name="uk_website_ref", columns={"ref", "entity"})})
 * @ORM\Entity
 */
class Website
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
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=128, nullable=false)
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maincolor", type="string", length=16, nullable=true)
     */
    private $maincolor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="maincolorbis", type="string", length=16, nullable=true)
     */
    private $maincolorbis;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang", type="string", length=8, nullable=true)
     */
    private $lang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="otherlang", type="string", length=255, nullable=true)
     */
    private $otherlang;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true, options={"default"="1"})
     */
    private $status = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_default_home", type="integer", nullable=true)
     */
    private $fkDefaultHome;

    /**
     * @var int|null
     *
     * @ORM\Column(name="use_manifest", type="integer", nullable=true)
     */
    private $useManifest;

    /**
     * @var string|null
     *
     * @ORM\Column(name="virtualhost", type="string", length=255, nullable=true)
     */
    private $virtualhost;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=true)
     */
    private $dateCreation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    private $position = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lastaccess", type="datetime", nullable=true)
     */
    private $lastaccess;

    /**
     * @var int|null
     *
     * @ORM\Column(name="pageviews_month", type="bigint", nullable=true, options={"unsigned"=true})
     */
    private $pageviewsMonth = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="pageviews_total", type="bigint", nullable=true, options={"unsigned"=true})
     */
    private $pageviewsTotal = '0';

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

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(int $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setRef(string $ref): self
    {
        $this->ref = $ref;

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

    public function getMaincolor(): ?string
    {
        return $this->maincolor;
    }

    public function setMaincolor(?string $maincolor): self
    {
        $this->maincolor = $maincolor;

        return $this;
    }

    public function getMaincolorbis(): ?string
    {
        return $this->maincolorbis;
    }

    public function setMaincolorbis(?string $maincolorbis): self
    {
        $this->maincolorbis = $maincolorbis;

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

    public function getOtherlang(): ?string
    {
        return $this->otherlang;
    }

    public function setOtherlang(?string $otherlang): self
    {
        $this->otherlang = $otherlang;

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

    public function getFkDefaultHome(): ?int
    {
        return $this->fkDefaultHome;
    }

    public function setFkDefaultHome(?int $fkDefaultHome): self
    {
        $this->fkDefaultHome = $fkDefaultHome;

        return $this;
    }

    public function getUseManifest(): ?int
    {
        return $this->useManifest;
    }

    public function setUseManifest(?int $useManifest): self
    {
        $this->useManifest = $useManifest;

        return $this;
    }

    public function getVirtualhost(): ?string
    {
        return $this->virtualhost;
    }

    public function setVirtualhost(?string $virtualhost): self
    {
        $this->virtualhost = $virtualhost;

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

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getLastaccess(): ?\DateTimeInterface
    {
        return $this->lastaccess;
    }

    public function setLastaccess(?\DateTimeInterface $lastaccess): self
    {
        $this->lastaccess = $lastaccess;

        return $this;
    }

    public function getPageviewsMonth(): ?string
    {
        return $this->pageviewsMonth;
    }

    public function setPageviewsMonth(?string $pageviewsMonth): self
    {
        $this->pageviewsMonth = $pageviewsMonth;

        return $this;
    }

    public function getPageviewsTotal(): ?string
    {
        return $this->pageviewsTotal;
    }

    public function setPageviewsTotal(?string $pageviewsTotal): self
    {
        $this->pageviewsTotal = $pageviewsTotal;

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


}
