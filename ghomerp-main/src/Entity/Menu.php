<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 *
 * @ORM\Table(name="menu", uniqueConstraints={@ORM\UniqueConstraint(name="idx_menu_uk_menu", columns={"menu_handler", "fk_menu", "position", "url", "entity"})}, indexes={@ORM\Index(name="idx_menu_menuhandler_type", columns={"menu_handler", "type"})})
 * @ORM\Entity
 */
class Menu
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
     * @ORM\Column(name="menu_handler", type="string", length=16, nullable=false)
     */
    private $menuHandler;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module", type="string", length=255, nullable=true)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=4, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="mainmenu", type="string", length=100, nullable=false)
     */
    private $mainmenu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="leftmenu", type="string", length=100, nullable=true)
     */
    private $leftmenu;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_menu", type="integer", nullable=false)
     */
    private $fkMenu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fk_mainmenu", type="string", length=100, nullable=true)
     */
    private $fkMainmenu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fk_leftmenu", type="string", length=100, nullable=true)
     */
    private $fkLeftmenu;

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="target", type="string", length=100, nullable=true)
     */
    private $target;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prefix", type="string", length=255, nullable=true)
     */
    private $prefix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="langs", type="string", length=100, nullable=true)
     */
    private $langs;

    /**
     * @var int|null
     *
     * @ORM\Column(name="level", type="smallint", nullable=true)
     */
    private $level;

    /**
     * @var string|null
     *
     * @ORM\Column(name="perms", type="text", length=65535, nullable=true)
     */
    private $perms;

    /**
     * @var string|null
     *
     * @ORM\Column(name="enabled", type="text", length=65535, nullable=true)
     */
    private $enabled;

    /**
     * @var int
     *
     * @ORM\Column(name="usertype", type="integer", nullable=false)
     */
    private $usertype = '0';

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

    public function getMenuHandler(): ?string
    {
        return $this->menuHandler;
    }

    public function setMenuHandler(string $menuHandler): self
    {
        $this->menuHandler = $menuHandler;

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

    public function getModule(): ?string
    {
        return $this->module;
    }

    public function setModule(?string $module): self
    {
        $this->module = $module;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMainmenu(): ?string
    {
        return $this->mainmenu;
    }

    public function setMainmenu(string $mainmenu): self
    {
        $this->mainmenu = $mainmenu;

        return $this;
    }

    public function getLeftmenu(): ?string
    {
        return $this->leftmenu;
    }

    public function setLeftmenu(?string $leftmenu): self
    {
        $this->leftmenu = $leftmenu;

        return $this;
    }

    public function getFkMenu(): ?int
    {
        return $this->fkMenu;
    }

    public function setFkMenu(int $fkMenu): self
    {
        $this->fkMenu = $fkMenu;

        return $this;
    }

    public function getFkMainmenu(): ?string
    {
        return $this->fkMainmenu;
    }

    public function setFkMainmenu(?string $fkMainmenu): self
    {
        $this->fkMainmenu = $fkMainmenu;

        return $this;
    }

    public function getFkLeftmenu(): ?string
    {
        return $this->fkLeftmenu;
    }

    public function setFkLeftmenu(?string $fkLeftmenu): self
    {
        $this->fkLeftmenu = $fkLeftmenu;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function setTarget(?string $target): self
    {
        $this->target = $target;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    public function setPrefix(?string $prefix): self
    {
        $this->prefix = $prefix;

        return $this;
    }

    public function getLangs(): ?string
    {
        return $this->langs;
    }

    public function setLangs(?string $langs): self
    {
        $this->langs = $langs;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(?int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getPerms(): ?string
    {
        return $this->perms;
    }

    public function setPerms(?string $perms): self
    {
        $this->perms = $perms;

        return $this;
    }

    public function getEnabled(): ?string
    {
        return $this->enabled;
    }

    public function setEnabled(?string $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getUsertype(): ?int
    {
        return $this->usertype;
    }

    public function setUsertype(int $usertype): self
    {
        $this->usertype = $usertype;

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
