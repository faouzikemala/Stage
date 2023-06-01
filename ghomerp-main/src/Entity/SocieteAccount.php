<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SocieteAccount
 *
 * @ORM\Table(name="societe_account", uniqueConstraints={@ORM\UniqueConstraint(name="uk_societe_account_key_account_soc", columns={"entity", "fk_soc", "key_account", "site", "fk_website"}), @ORM\UniqueConstraint(name="uk_societe_account_login_website_soc", columns={"entity", "fk_soc", "login", "site", "fk_website"})}, indexes={@ORM\Index(name="idx_societe_account_fk_website", columns={"fk_website"}), @ORM\Index(name="idx_societe_account_login", columns={"login"}), @ORM\Index(name="idx_societe_account_fk_soc", columns={"fk_soc"}), @ORM\Index(name="idx_societe_account_rowid", columns={"rowid"}), @ORM\Index(name="idx_societe_account_status", columns={"status"})})
 * @ORM\Entity
 */
class SocieteAccount
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
     * @ORM\Column(name="entity", type="integer", nullable=true, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=128, nullable=false)
     */
    private $login;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pass_encoding", type="string", length=24, nullable=true)
     */
    private $passEncoding;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pass_crypted", type="string", length=128, nullable=true)
     */
    private $passCrypted;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pass_temp", type="string", length=128, nullable=true)
     */
    private $passTemp;

    /**
     * @var string|null
     *
     * @ORM\Column(name="site", type="string", length=128, nullable=true)
     */
    private $site;

    /**
     * @var string|null
     *
     * @ORM\Column(name="site_account", type="string", length=128, nullable=true)
     */
    private $siteAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="key_account", type="string", length=128, nullable=true)
     */
    private $keyAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_private", type="text", length=65535, nullable=true)
     */
    private $notePrivate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_last_login", type="datetime", nullable=true)
     */
    private $dateLastLogin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_previous_login", type="datetime", nullable=true)
     */
    private $datePreviousLogin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="fk_user_creat", type="integer", nullable=false)
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
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

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
     * @var \Website
     *
     * @ORM\ManyToOne(targetEntity="Website")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_website", referencedColumnName="rowid")
     * })
     */
    private $fkWebsite;

    public function getRowid(): ?int
    {
        return $this->rowid;
    }

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(?int $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassEncoding(): ?string
    {
        return $this->passEncoding;
    }

    public function setPassEncoding(?string $passEncoding): self
    {
        $this->passEncoding = $passEncoding;

        return $this;
    }

    public function getPassCrypted(): ?string
    {
        return $this->passCrypted;
    }

    public function setPassCrypted(?string $passCrypted): self
    {
        $this->passCrypted = $passCrypted;

        return $this;
    }

    public function getPassTemp(): ?string
    {
        return $this->passTemp;
    }

    public function setPassTemp(?string $passTemp): self
    {
        $this->passTemp = $passTemp;

        return $this;
    }

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(?string $site): self
    {
        $this->site = $site;

        return $this;
    }

    public function getSiteAccount(): ?string
    {
        return $this->siteAccount;
    }

    public function setSiteAccount(?string $siteAccount): self
    {
        $this->siteAccount = $siteAccount;

        return $this;
    }

    public function getKeyAccount(): ?string
    {
        return $this->keyAccount;
    }

    public function setKeyAccount(?string $keyAccount): self
    {
        $this->keyAccount = $keyAccount;

        return $this;
    }

    public function getNotePrivate(): ?string
    {
        return $this->notePrivate;
    }

    public function setNotePrivate(?string $notePrivate): self
    {
        $this->notePrivate = $notePrivate;

        return $this;
    }

    public function getDateLastLogin(): ?\DateTimeInterface
    {
        return $this->dateLastLogin;
    }

    public function setDateLastLogin(?\DateTimeInterface $dateLastLogin): self
    {
        $this->dateLastLogin = $dateLastLogin;

        return $this;
    }

    public function getDatePreviousLogin(): ?\DateTimeInterface
    {
        return $this->datePreviousLogin;
    }

    public function setDatePreviousLogin(?\DateTimeInterface $datePreviousLogin): self
    {
        $this->datePreviousLogin = $datePreviousLogin;

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

    public function getFkUserCreat(): ?int
    {
        return $this->fkUserCreat;
    }

    public function setFkUserCreat(int $fkUserCreat): self
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

    public function getImportKey(): ?string
    {
        return $this->importKey;
    }

    public function setImportKey(?string $importKey): self
    {
        $this->importKey = $importKey;

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

    public function getFkSoc(): ?Societe
    {
        return $this->fkSoc;
    }

    public function setFkSoc(?Societe $fkSoc): self
    {
        $this->fkSoc = $fkSoc;

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


}
