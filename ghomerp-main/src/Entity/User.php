<?php

namespace App\Entity;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 * @ApiResource()
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="uk_user_fk_member", columns={"fk_member"}), @ORM\UniqueConstraint(name="uk_user_login", columns={"login", "entity"}), @ORM\UniqueConstraint(name="uk_user_fk_socpeople", columns={"fk_socpeople"}), @ORM\UniqueConstraint(name="uk_user_api_key", columns={"api_key"})}, indexes={@ORM\Index(name="idx_user_fk_societe", columns={"fk_soc"})})
 * @ORM\Entity
 */
class User implements UserInterface, PasswordAuthenticatedUserInterface
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
     * @var string|null
     *
     * @ORM\Column(name="ref_ext", type="string", length=50, nullable=true)
     */
    private $refExt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_int", type="string", length=50, nullable=true)
     */
    private $refInt;

    /**
     * @var int|null
     *
     * @ORM\Column(name="admin", type="smallint", nullable=true)
     */
    private $admin = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="employee", type="boolean", nullable=true, options={"default"="1"})
     */
    private $employee = true;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_establishment", type="integer", nullable=true)
     */
    private $fkEstablishment = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true)
     */
    private $tms;

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
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=50, nullable=false)
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
     * @ORM\Column(name="password", type="string", length=128, nullable=true)
     */
    private $password;

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
     * @ORM\Column(name="api_key", type="string", length=128, nullable=true)
     */
    private $apiKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gender", type="string", length=10, nullable=true)
     */
    private $gender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="civility", type="string", length=6, nullable=true)
     */
    private $civility;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastname", type="string", length=50, nullable=true)
     */
    private $lastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="firstname", type="string", length=50, nullable=true)
     */
    private $firstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="zip", type="string", length=25, nullable=true)
     */
    private $zip;

    /**
     * @var string|null
     *
     * @ORM\Column(name="town", type="string", length=50, nullable=true)
     */
    private $town;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_state", type="integer", nullable=true)
     */
    private $fkState = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_country", type="integer", nullable=true)
     */
    private $fkCountry = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="birth", type="date", nullable=true)
     */
    private $birth;

    /**
     * @var string|null
     *
     * @ORM\Column(name="job", type="string", length=128, nullable=true)
     */
    private $job;

    /**
     * @var string|null
     *
     * @ORM\Column(name="office_phone", type="string", length=20, nullable=true)
     */
    private $officePhone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="office_fax", type="string", length=20, nullable=true)
     */
    private $officeFax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_mobile", type="string", length=20, nullable=true)
     */
    private $userMobile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="personal_mobile", type="string", length=20, nullable=true)
     */
    private $personalMobile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="personal_email", type="string", length=255, nullable=true)
     */
    private $personalEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="signature", type="text", length=65535, nullable=true)
     */
    private $signature;

    /**
     * @var string|null
     *
     * @ORM\Column(name="socialnetworks", type="text", length=65535, nullable=true)
     */
    private $socialnetworks;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_socpeople", type="integer", nullable=true)
     */
    private $fkSocpeople;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_member", type="integer", nullable=true)
     */
    private $fkMember;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user", type="integer", nullable=true)
     */
    private $fkUser;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_expense_validator", type="integer", nullable=true)
     */
    private $fkUserExpenseValidator;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_holiday_validator", type="integer", nullable=true)
     */
    private $fkUserHolidayValidator;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idpers1", type="string", length=128, nullable=true)
     */
    private $idpers1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idpers2", type="string", length=128, nullable=true)
     */
    private $idpers2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="idpers3", type="string", length=128, nullable=true)
     */
    private $idpers3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="model_pdf", type="string", length=255, nullable=true)
     */
    private $modelPdf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datelastlogin", type="datetime", nullable=true)
     */
    private $datelastlogin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datepreviouslogin", type="datetime", nullable=true)
     */
    private $datepreviouslogin;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datelastpassvalidation", type="datetime", nullable=true)
     */
    private $datelastpassvalidation;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datestartvalidity", type="datetime", nullable=true)
     */
    private $datestartvalidity;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateendvalidity", type="datetime", nullable=true)
     */
    private $dateendvalidity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="iplastlogin", type="string", length=250, nullable=true)
     */
    private $iplastlogin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ippreviouslogin", type="string", length=250, nullable=true)
     */
    private $ippreviouslogin;

    /**
     * @var int|null
     *
     * @ORM\Column(name="egroupware_id", type="integer", nullable=true)
     */
    private $egroupwareId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ldap_sid", type="string", length=255, nullable=true)
     */
    private $ldapSid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="openid", type="string", length=255, nullable=true)
     */
    private $openid;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut", type="boolean", nullable=true, options={"default"="1"})
     */
    private $statut = true;

    /**
     * @var string|null
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lang", type="string", length=6, nullable=true)
     */
    private $lang;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=6, nullable=true)
     */
    private $color;

    /**
     * @var string|null
     *
     * @ORM\Column(name="barcode", type="string", length=255, nullable=true)
     */
    private $barcode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_barcode_type", type="integer", nullable=true)
     */
    private $fkBarcodeType = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="accountancy_code", type="string", length=32, nullable=true)
     */
    private $accountancyCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_holiday", type="integer", nullable=true)
     */
    private $nbHoliday = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="thm", type="float", precision=24, scale=8, nullable=true)
     */
    private $thm;

    /**
     * @var float|null
     *
     * @ORM\Column(name="tjm", type="float", precision=24, scale=8, nullable=true)
     */
    private $tjm;

    /**
     * @var float|null
     *
     * @ORM\Column(name="salary", type="float", precision=24, scale=8, nullable=true)
     */
    private $salary;

    /**
     * @var float|null
     *
     * @ORM\Column(name="salaryextra", type="float", precision=24, scale=8, nullable=true)
     */
    private $salaryextra;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateemployment", type="date", nullable=true)
     */
    private $dateemployment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateemploymentend", type="date", nullable=true)
     */
    private $dateemploymentend;

    /**
     * @var float|null
     *
     * @ORM\Column(name="weeklyhours", type="float", precision=16, scale=8, nullable=true)
     */
    private $weeklyhours;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var int|null
     *
     * @ORM\Column(name="default_range", type="integer", nullable=true)
     */
    private $defaultRange;

    /**
     * @var int|null
     *
     * @ORM\Column(name="default_c_exp_tax_cat", type="integer", nullable=true)
     */
    private $defaultCExpTaxCat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_warehouse", type="integer", nullable=true)
     */
    private $fkWarehouse;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Categorie", mappedBy="fkUser")
     */
    private $fkCategorie;
	
	 /**
     * @ORM\Column(type="json")
     */
    private $roles = [];


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

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(int $entity): self
    {
        $this->entity = $entity;

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

    public function getRefInt(): ?string
    {
        return $this->refInt;
    }

    public function setRefInt(?string $refInt): self
    {
        $this->refInt = $refInt;

        return $this;
    }

    public function getAdmin(): ?int
    {
        return $this->admin;
    }

    public function setAdmin(?int $admin): self
    {
        $this->admin = $admin;

        return $this;
    }

    public function getEmployee(): ?bool
    {
        return $this->employee;
    }

    public function setEmployee(?bool $employee): self
    {
        $this->employee = $employee;

        return $this;
    }

    public function getFkEstablishment(): ?int
    {
        return $this->fkEstablishment;
    }

    public function setFkEstablishment(?int $fkEstablishment): self
    {
        $this->fkEstablishment = $fkEstablishment;

        return $this;
    }

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(?\DateTimeInterface $datec): self
    {
        $this->datec = $datec;

        return $this;
    }

    public function getTms(): ?\DateTimeInterface
    {
        return $this->tms;
    }

    public function setTms(?\DateTimeInterface $tms): self
    {
        $this->tms = new \DateTime();

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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

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

    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    public function setApiKey(?string $apiKey): self
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getCivility(): ?string
    {
        return $this->civility;
    }

    public function setCivility(?string $civility): self
    {
        $this->civility = $civility;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(?string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getTown(): ?string
    {
        return $this->town;
    }

    public function setTown(?string $town): self
    {
        $this->town = $town;

        return $this;
    }

    public function getFkState(): ?int
    {
        return $this->fkState;
    }

    public function setFkState(?int $fkState): self
    {
        $this->fkState = $fkState;

        return $this;
    }

    public function getFkCountry(): ?int
    {
        return $this->fkCountry;
    }

    public function setFkCountry(?int $fkCountry): self
    {
        $this->fkCountry = $fkCountry;

        return $this;
    }

    public function getBirth(): ?\DateTimeInterface
    {
        return $this->birth;
    }

    public function setBirth(?\DateTimeInterface $birth): self
    {
        $this->birth = $birth;

        return $this;
    }

    public function getJob(): ?string
    {
        return $this->job;
    }

    public function setJob(?string $job): self
    {
        $this->job = $job;

        return $this;
    }

    public function getOfficePhone(): ?string
    {
        return $this->officePhone;
    }

    public function setOfficePhone(?string $officePhone): self
    {
        $this->officePhone = $officePhone;

        return $this;
    }

    public function getOfficeFax(): ?string
    {
        return $this->officeFax;
    }

    public function setOfficeFax(?string $officeFax): self
    {
        $this->officeFax = $officeFax;

        return $this;
    }

    public function getUserMobile(): ?string
    {
        return $this->userMobile;
    }

    public function setUserMobile(?string $userMobile): self
    {
        $this->userMobile = $userMobile;

        return $this;
    }

    public function getPersonalMobile(): ?string
    {
        return $this->personalMobile;
    }

    public function setPersonalMobile(?string $personalMobile): self
    {
        $this->personalMobile = $personalMobile;

        return $this;
    }


    public function getPersonalEmail(): ?string
    {
        return $this->personalEmail;
    }

    public function setPersonalEmail(?string $personalEmail): self
    {
        $this->personalEmail = $personalEmail;

        return $this;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(?string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    public function getSocialnetworks(): ?string
    {
        return $this->socialnetworks;
    }

    public function setSocialnetworks(?string $socialnetworks): self
    {
        $this->socialnetworks = $socialnetworks;

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

    public function getFkSocpeople(): ?int
    {
        return $this->fkSocpeople;
    }

    public function setFkSocpeople(?int $fkSocpeople): self
    {
        $this->fkSocpeople = $fkSocpeople;

        return $this;
    }

    public function getFkMember(): ?int
    {
        return $this->fkMember;
    }

    public function setFkMember(?int $fkMember): self
    {
        $this->fkMember = $fkMember;

        return $this;
    }

    public function getFkUser(): ?int
    {
        return $this->fkUser;
    }

    public function setFkUser(?int $fkUser): self
    {
        $this->fkUser = $fkUser;

        return $this;
    }

    public function getFkUserExpenseValidator(): ?int
    {
        return $this->fkUserExpenseValidator;
    }

    public function setFkUserExpenseValidator(?int $fkUserExpenseValidator): self
    {
        $this->fkUserExpenseValidator = $fkUserExpenseValidator;

        return $this;
    }

    public function getFkUserHolidayValidator(): ?int
    {
        return $this->fkUserHolidayValidator;
    }

    public function setFkUserHolidayValidator(?int $fkUserHolidayValidator): self
    {
        $this->fkUserHolidayValidator = $fkUserHolidayValidator;

        return $this;
    }

    public function getIdpers1(): ?string
    {
        return $this->idpers1;
    }

    public function setIdpers1(?string $idpers1): self
    {
        $this->idpers1 = $idpers1;

        return $this;
    }

    public function getIdpers2(): ?string
    {
        return $this->idpers2;
    }

    public function setIdpers2(?string $idpers2): self
    {
        $this->idpers2 = $idpers2;

        return $this;
    }

    public function getIdpers3(): ?string
    {
        return $this->idpers3;
    }

    public function setIdpers3(?string $idpers3): self
    {
        $this->idpers3 = $idpers3;

        return $this;
    }

    public function getNotePublic(): ?string
    {
        return $this->notePublic;
    }

    public function setNotePublic(?string $notePublic): self
    {
        $this->notePublic = $notePublic;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getModelPdf(): ?string
    {
        return $this->modelPdf;
    }

    public function setModelPdf(?string $modelPdf): self
    {
        $this->modelPdf = $modelPdf;

        return $this;
    }

    public function getDatelastlogin(): ?\DateTimeInterface
    {
        return $this->datelastlogin;
    }

    public function setDatelastlogin(?\DateTimeInterface $datelastlogin): self
    {
        $this->datelastlogin = $datelastlogin;

        return $this;
    }

    public function getDatepreviouslogin(): ?\DateTimeInterface
    {
        return $this->datepreviouslogin;
    }

    public function setDatepreviouslogin(?\DateTimeInterface $datepreviouslogin): self
    {
        $this->datepreviouslogin = $datepreviouslogin;

        return $this;
    }

    public function getDatelastpassvalidation(): ?\DateTimeInterface
    {
        return $this->datelastpassvalidation;
    }

    public function setDatelastpassvalidation(?\DateTimeInterface $datelastpassvalidation): self
    {
        $this->datelastpassvalidation = $datelastpassvalidation;

        return $this;
    }

    public function getDatestartvalidity(): ?\DateTimeInterface
    {
        return $this->datestartvalidity;
    }

    public function setDatestartvalidity(?\DateTimeInterface $datestartvalidity): self
    {
        $this->datestartvalidity = $datestartvalidity;

        return $this;
    }

    public function getDateendvalidity(): ?\DateTimeInterface
    {
        return $this->dateendvalidity;
    }

    public function setDateendvalidity(?\DateTimeInterface $dateendvalidity): self
    {
        $this->dateendvalidity = $dateendvalidity;

        return $this;
    }

    public function getIplastlogin(): ?string
    {
        return $this->iplastlogin;
    }

    public function setIplastlogin(?string $iplastlogin): self
    {
        $this->iplastlogin = $iplastlogin;

        return $this;
    }

    public function getIppreviouslogin(): ?string
    {
        return $this->ippreviouslogin;
    }

    public function setIppreviouslogin(?string $ippreviouslogin): self
    {
        $this->ippreviouslogin = $ippreviouslogin;

        return $this;
    }

    public function getEgroupwareId(): ?int
    {
        return $this->egroupwareId;
    }

    public function setEgroupwareId(?int $egroupwareId): self
    {
        $this->egroupwareId = $egroupwareId;

        return $this;
    }

    public function getLdapSid(): ?string
    {
        return $this->ldapSid;
    }

    public function setLdapSid(?string $ldapSid): self
    {
        $this->ldapSid = $ldapSid;

        return $this;
    }

    public function getOpenid(): ?string
    {
        return $this->openid;
    }

    public function setOpenid(?string $openid): self
    {
        $this->openid = $openid;

        return $this;
    }

    public function getStatut(): ?bool
    {
        return $this->statut;
    }

    public function setStatut(?bool $statut): self
    {
        $this->statut = $statut;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

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

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    public function setBarcode(?string $barcode): self
    {
        $this->barcode = $barcode;

        return $this;
    }

    public function getFkBarcodeType(): ?int
    {
        return $this->fkBarcodeType;
    }

    public function setFkBarcodeType(?int $fkBarcodeType): self
    {
        $this->fkBarcodeType = $fkBarcodeType;

        return $this;
    }

    public function getAccountancyCode(): ?string
    {
        return $this->accountancyCode;
    }

    public function setAccountancyCode(?string $accountancyCode): self
    {
        $this->accountancyCode = $accountancyCode;

        return $this;
    }

    public function getNbHoliday(): ?int
    {
        return $this->nbHoliday;
    }

    public function setNbHoliday(?int $nbHoliday): self
    {
        $this->nbHoliday = $nbHoliday;

        return $this;
    }

    public function getThm(): ?float
    {
        return $this->thm;
    }

    public function setThm(?float $thm): self
    {
        $this->thm = $thm;

        return $this;
    }

    public function getTjm(): ?float
    {
        return $this->tjm;
    }

    public function setTjm(?float $tjm): self
    {
        $this->tjm = $tjm;

        return $this;
    }

    public function getSalary(): ?float
    {
        return $this->salary;
    }

    public function setSalary(?float $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getSalaryextra(): ?float
    {
        return $this->salaryextra;
    }

    public function setSalaryextra(?float $salaryextra): self
    {
        $this->salaryextra = $salaryextra;

        return $this;
    }

    public function getDateemployment(): ?\DateTimeInterface
    {
        return $this->dateemployment;
    }

    public function setDateemployment(?\DateTimeInterface $dateemployment): self
    {
        $this->dateemployment = $dateemployment;

        return $this;
    }

    public function getDateemploymentend(): ?\DateTimeInterface
    {
        return $this->dateemploymentend;
    }

    public function setDateemploymentend(?\DateTimeInterface $dateemploymentend): self
    {
        $this->dateemploymentend = $dateemploymentend;

        return $this;
    }

    public function getWeeklyhours(): ?float
    {
        return $this->weeklyhours;
    }

    public function setWeeklyhours(?float $weeklyhours): self
    {
        $this->weeklyhours = $weeklyhours;

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

    public function getDefaultRange(): ?int
    {
        return $this->defaultRange;
    }

    public function setDefaultRange(?int $defaultRange): self
    {
        $this->defaultRange = $defaultRange;

        return $this;
    }

    public function getDefaultCExpTaxCat(): ?int
    {
        return $this->defaultCExpTaxCat;
    }

    public function setDefaultCExpTaxCat(?int $defaultCExpTaxCat): self
    {
        $this->defaultCExpTaxCat = $defaultCExpTaxCat;

        return $this;
    }

    public function getFkWarehouse(): ?int
    {
        return $this->fkWarehouse;
    }

    public function setFkWarehouse(?int $fkWarehouse): self
    {
        $this->fkWarehouse = $fkWarehouse;

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
            $fkCategorie->addFkUser($this);
        }

        return $this;
    }

    public function removeFkCategorie(Categorie $fkCategorie): self
    {
        if ($this->fkCategorie->removeElement($fkCategorie)) {
            $fkCategorie->removeFkUser($this);
        }

        return $this;
    }
	
	/**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string)$this->login;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string)$this->login;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        return array_unique($roles);
    }

    /**
     * @param array $roles
     * @return $this
     */
    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }


    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

}
