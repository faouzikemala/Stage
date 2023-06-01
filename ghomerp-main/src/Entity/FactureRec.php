<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FactureRec
 *
 * @ORM\Table(name="facture_rec", uniqueConstraints={@ORM\UniqueConstraint(name="idx_facture_rec_uk_titre", columns={"titre", "entity"})}, indexes={@ORM\Index(name="idx_facture_rec_fk_user_author", columns={"fk_user_author"}), @ORM\Index(name="idx_facture_rec_fk_soc", columns={"fk_soc"}), @ORM\Index(name="idx_facture_rec_fk_projet", columns={"fk_projet"})})
 * @ORM\Entity
 */
class FactureRec
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
     * @ORM\Column(name="titre", type="string", length=200, nullable=false)
     */
    private $titre;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="suspended", type="integer", nullable=true)
     */
    private $suspended = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=24, scale=8, nullable=false, options={"default"="0.00000000"})
     */
    private $amount = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise", type="float", precision=10, scale=0, nullable=true)
     */
    private $remise = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise_percent", type="float", precision=10, scale=0, nullable=true)
     */
    private $remisePercent = '0';

    /**
     * @var float|null
     *
     * @ORM\Column(name="remise_absolue", type="float", precision=10, scale=0, nullable=true)
     */
    private $remiseAbsolue = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="vat_src_code", type="string", length=10, nullable=true)
     */
    private $vatSrcCode = '';

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_tva", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalTva = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax1", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $localtax1 = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="localtax2", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $localtax2 = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="revenuestamp", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $revenuestamp = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ht", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalHt = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="total_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $totalTtc = 0.00000000;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_modif", type="integer", nullable=true)
     */
    private $fkUserModif;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_cond_reglement", type="integer", nullable=false, options={"default"="1"})
     */
    private $fkCondReglement = 1;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_mode_reglement", type="integer", nullable=true)
     */
    private $fkModeReglement = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_lim_reglement", type="date", nullable=true)
     */
    private $dateLimReglement;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_account", type="integer", nullable=true)
     */
    private $fkAccount;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_private", type="text", length=65535, nullable=true)
     */
    private $notePrivate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note_public", type="text", length=65535, nullable=true)
     */
    private $notePublic;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modelpdf", type="string", length=255, nullable=true)
     */
    private $modelpdf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_multicurrency", type="integer", nullable=true)
     */
    private $fkMulticurrency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="multicurrency_code", type="string", length=255, nullable=true)
     */
    private $multicurrencyCode;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_tx", type="float", precision=24, scale=8, nullable=true, options={"default"="1.00000000"})
     */
    private $multicurrencyTx = 1.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_total_ht", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencyTotalHt = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_total_tva", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencyTotalTva = 0.00000000;

    /**
     * @var float|null
     *
     * @ORM\Column(name="multicurrency_total_ttc", type="float", precision=24, scale=8, nullable=true, options={"default"="0.00000000"})
     */
    private $multicurrencyTotalTtc = 0.00000000;

    /**
     * @var int|null
     *
     * @ORM\Column(name="usenewprice", type="integer", nullable=true)
     */
    private $usenewprice = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="frequency", type="integer", nullable=true)
     */
    private $frequency;

    /**
     * @var string|null
     *
     * @ORM\Column(name="unit_frequency", type="string", length=2, nullable=true, options={"default"="m"})
     */
    private $unitFrequency = 'm';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_when", type="datetime", nullable=true)
     */
    private $dateWhen;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_last_gen", type="datetime", nullable=true)
     */
    private $dateLastGen;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_gen_done", type="integer", nullable=true)
     */
    private $nbGenDone;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nb_gen_max", type="integer", nullable=true)
     */
    private $nbGenMax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="auto_validate", type="integer", nullable=true)
     */
    private $autoValidate = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="generate_pdf", type="integer", nullable=true, options={"default"="1"})
     */
    private $generatePdf = 1;

    /**
     * @var \Projet
     *
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_projet", referencedColumnName="rowid")
     * })
     */
    private $fkProjet;

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
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_user_author", referencedColumnName="rowid")
     * })
     */
    private $fkUserAuthor;

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function getEntity(): ?int
    {
        return $this->entity;
    }

    public function setEntity(int $entity): self
    {
        $this->entity = $entity;

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
        $this->tms = $tms;

        return $this;
    }

    public function getSuspended(): ?int
    {
        return $this->suspended;
    }

    public function setSuspended(?int $suspended): self
    {
        $this->suspended = $suspended;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getRemise(): ?float
    {
        return $this->remise;
    }

    public function setRemise(?float $remise): self
    {
        $this->remise = $remise;

        return $this;
    }

    public function getRemisePercent(): ?float
    {
        return $this->remisePercent;
    }

    public function setRemisePercent(?float $remisePercent): self
    {
        $this->remisePercent = $remisePercent;

        return $this;
    }

    public function getRemiseAbsolue(): ?float
    {
        return $this->remiseAbsolue;
    }

    public function setRemiseAbsolue(?float $remiseAbsolue): self
    {
        $this->remiseAbsolue = $remiseAbsolue;

        return $this;
    }

    public function getVatSrcCode(): ?string
    {
        return $this->vatSrcCode;
    }

    public function setVatSrcCode(?string $vatSrcCode): self
    {
        $this->vatSrcCode = $vatSrcCode;

        return $this;
    }

    public function getTotalTva(): ?float
    {
        return $this->totalTva;
    }

    public function setTotalTva(?float $totalTva): self
    {
        $this->totalTva = $totalTva;

        return $this;
    }

    public function getLocaltax1(): ?float
    {
        return $this->localtax1;
    }

    public function setLocaltax1(?float $localtax1): self
    {
        $this->localtax1 = $localtax1;

        return $this;
    }

    public function getLocaltax2(): ?float
    {
        return $this->localtax2;
    }

    public function setLocaltax2(?float $localtax2): self
    {
        $this->localtax2 = $localtax2;

        return $this;
    }

    public function getRevenuestamp(): ?float
    {
        return $this->revenuestamp;
    }

    public function setRevenuestamp(?float $revenuestamp): self
    {
        $this->revenuestamp = $revenuestamp;

        return $this;
    }

    public function getTotalHt(): ?float
    {
        return $this->totalHt;
    }

    public function setTotalHt(?float $totalHt): self
    {
        $this->totalHt = $totalHt;

        return $this;
    }

    public function getTotalTtc(): ?float
    {
        return $this->totalTtc;
    }

    public function setTotalTtc(?float $totalTtc): self
    {
        $this->totalTtc = $totalTtc;

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

    public function getFkCondReglement(): ?int
    {
        return $this->fkCondReglement;
    }

    public function setFkCondReglement(int $fkCondReglement): self
    {
        $this->fkCondReglement = $fkCondReglement;

        return $this;
    }

    public function getFkModeReglement(): ?int
    {
        return $this->fkModeReglement;
    }

    public function setFkModeReglement(?int $fkModeReglement): self
    {
        $this->fkModeReglement = $fkModeReglement;

        return $this;
    }

    public function getDateLimReglement(): ?\DateTimeInterface
    {
        return $this->dateLimReglement;
    }

    public function setDateLimReglement(?\DateTimeInterface $dateLimReglement): self
    {
        $this->dateLimReglement = $dateLimReglement;

        return $this;
    }

    public function getFkAccount(): ?int
    {
        return $this->fkAccount;
    }

    public function setFkAccount(?int $fkAccount): self
    {
        $this->fkAccount = $fkAccount;

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

    public function getNotePublic(): ?string
    {
        return $this->notePublic;
    }

    public function setNotePublic(?string $notePublic): self
    {
        $this->notePublic = $notePublic;

        return $this;
    }

    public function getModelpdf(): ?string
    {
        return $this->modelpdf;
    }

    public function setModelpdf(?string $modelpdf): self
    {
        $this->modelpdf = $modelpdf;

        return $this;
    }

    public function getFkMulticurrency(): ?int
    {
        return $this->fkMulticurrency;
    }

    public function setFkMulticurrency(?int $fkMulticurrency): self
    {
        $this->fkMulticurrency = $fkMulticurrency;

        return $this;
    }

    public function getMulticurrencyCode(): ?string
    {
        return $this->multicurrencyCode;
    }

    public function setMulticurrencyCode(?string $multicurrencyCode): self
    {
        $this->multicurrencyCode = $multicurrencyCode;

        return $this;
    }

    public function getMulticurrencyTx(): ?float
    {
        return $this->multicurrencyTx;
    }

    public function setMulticurrencyTx(?float $multicurrencyTx): self
    {
        $this->multicurrencyTx = $multicurrencyTx;

        return $this;
    }

    public function getMulticurrencyTotalHt(): ?float
    {
        return $this->multicurrencyTotalHt;
    }

    public function setMulticurrencyTotalHt(?float $multicurrencyTotalHt): self
    {
        $this->multicurrencyTotalHt = $multicurrencyTotalHt;

        return $this;
    }

    public function getMulticurrencyTotalTva(): ?float
    {
        return $this->multicurrencyTotalTva;
    }

    public function setMulticurrencyTotalTva(?float $multicurrencyTotalTva): self
    {
        $this->multicurrencyTotalTva = $multicurrencyTotalTva;

        return $this;
    }

    public function getMulticurrencyTotalTtc(): ?float
    {
        return $this->multicurrencyTotalTtc;
    }

    public function setMulticurrencyTotalTtc(?float $multicurrencyTotalTtc): self
    {
        $this->multicurrencyTotalTtc = $multicurrencyTotalTtc;

        return $this;
    }

    public function getUsenewprice(): ?int
    {
        return $this->usenewprice;
    }

    public function setUsenewprice(?int $usenewprice): self
    {
        $this->usenewprice = $usenewprice;

        return $this;
    }

    public function getFrequency(): ?int
    {
        return $this->frequency;
    }

    public function setFrequency(?int $frequency): self
    {
        $this->frequency = $frequency;

        return $this;
    }

    public function getUnitFrequency(): ?string
    {
        return $this->unitFrequency;
    }

    public function setUnitFrequency(?string $unitFrequency): self
    {
        $this->unitFrequency = $unitFrequency;

        return $this;
    }

    public function getDateWhen(): ?\DateTimeInterface
    {
        return $this->dateWhen;
    }

    public function setDateWhen(?\DateTimeInterface $dateWhen): self
    {
        $this->dateWhen = $dateWhen;

        return $this;
    }

    public function getDateLastGen(): ?\DateTimeInterface
    {
        return $this->dateLastGen;
    }

    public function setDateLastGen(?\DateTimeInterface $dateLastGen): self
    {
        $this->dateLastGen = $dateLastGen;

        return $this;
    }

    public function getNbGenDone(): ?int
    {
        return $this->nbGenDone;
    }

    public function setNbGenDone(?int $nbGenDone): self
    {
        $this->nbGenDone = $nbGenDone;

        return $this;
    }

    public function getNbGenMax(): ?int
    {
        return $this->nbGenMax;
    }

    public function setNbGenMax(?int $nbGenMax): self
    {
        $this->nbGenMax = $nbGenMax;

        return $this;
    }

    public function getAutoValidate(): ?int
    {
        return $this->autoValidate;
    }

    public function setAutoValidate(?int $autoValidate): self
    {
        $this->autoValidate = $autoValidate;

        return $this;
    }

    public function getGeneratePdf(): ?int
    {
        return $this->generatePdf;
    }

    public function setGeneratePdf(?int $generatePdf): self
    {
        $this->generatePdf = $generatePdf;

        return $this;
    }

    public function getFkProjet(): ?Projet
    {
        return $this->fkProjet;
    }

    public function setFkProjet(?Projet $fkProjet): self
    {
        $this->fkProjet = $fkProjet;

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

    public function getFkUserAuthor(): ?User
    {
        return $this->fkUserAuthor;
    }

    public function setFkUserAuthor(?User $fkUserAuthor): self
    {
        $this->fkUserAuthor = $fkUserAuthor;

        return $this;
    }


}
