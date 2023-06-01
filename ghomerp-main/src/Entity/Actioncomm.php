<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Actioncomm
 *
 * @ORM\Table(name="actioncomm", uniqueConstraints={@ORM\UniqueConstraint(name="uk_actioncomm_ref", columns={"ref", "entity"})}, indexes={@ORM\Index(name="idx_actioncomm_ref_ext", columns={"ref_ext"}), @ORM\Index(name="idx_actioncomm_fk_contact", columns={"fk_contact"}), @ORM\Index(name="idx_actioncomm_fk_element", columns={"fk_element"}), @ORM\Index(name="idx_actioncomm_fk_project", columns={"fk_project"}), @ORM\Index(name="idx_actioncomm_datep2", columns={"datep2"}), @ORM\Index(name="idx_actioncomm_recurid", columns={"recurid"}), @ORM\Index(name="idx_actioncomm_fk_soc", columns={"fk_soc"}), @ORM\Index(name="idx_actioncomm_code", columns={"code"}), @ORM\Index(name="idx_actioncomm_fk_user_action", columns={"fk_user_action"}), @ORM\Index(name="idx_actioncomm_datep", columns={"datep"})})
 * @ORM\Entity
 */
class Actioncomm
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=30, nullable=false)
     */
    private $ref;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ref_ext", type="string", length=255, nullable=true)
     */
    private $refExt;

    /**
     * @var int
     *
     * @ORM\Column(name="entity", type="integer", nullable=false, options={"default"="1"})
     */
    private $entity = 1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datep", type="datetime", nullable=true)
     */
    private $datep;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datep2", type="datetime", nullable=true)
     */
    private $datep2;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_action", type="integer", nullable=true)
     */
    private $fkAction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="code", type="string", length=50, nullable=true)
     */
    private $code;

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
     * @ORM\Column(name="fk_user_author", type="integer", nullable=true)
     */
    private $fkUserAuthor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_mod", type="integer", nullable=true)
     */
    private $fkUserMod;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_project", type="integer", nullable=true)
     */
    private $fkProject;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_soc", type="integer", nullable=true)
     */
    private $fkSoc;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_contact", type="integer", nullable=true)
     */
    private $fkContact;

    /**
     * @var int
     *
     * @ORM\Column(name="fk_parent", type="integer", nullable=false)
     */
    private $fkParent = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_action", type="integer", nullable=true)
     */
    private $fkUserAction;

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_user_done", type="integer", nullable=true)
     */
    private $fkUserDone;

    /**
     * @var int|null
     *
     * @ORM\Column(name="transparency", type="integer", nullable=true)
     */
    private $transparency;

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority", type="smallint", nullable=true)
     */
    private $priority;

    /**
     * @var string|null
     *
     * @ORM\Column(name="visibility", type="string", length=12, nullable=true, options={"default"="default"})
     */
    private $visibility = 'default';

    /**
     * @var int
     *
     * @ORM\Column(name="fulldayevent", type="smallint", nullable=false)
     */
    private $fulldayevent = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="percent", type="smallint", nullable=false)
     */
    private $percent = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="location", type="string", length=128, nullable=true)
     */
    private $location;

    /**
     * @var float|null
     *
     * @ORM\Column(name="durationp", type="float", precision=10, scale=0, nullable=true)
     */
    private $durationp;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var int|null
     *
     * @ORM\Column(name="calling_duration", type="integer", nullable=true)
     */
    private $callingDuration;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_subject", type="string", length=255, nullable=true)
     */
    private $emailSubject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_msgid", type="string", length=255, nullable=true)
     */
    private $emailMsgid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_from", type="string", length=255, nullable=true)
     */
    private $emailFrom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_sender", type="string", length=255, nullable=true)
     */
    private $emailSender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_to", type="string", length=255, nullable=true)
     */
    private $emailTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_tocc", type="string", length=255, nullable=true)
     */
    private $emailTocc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_tobcc", type="string", length=255, nullable=true)
     */
    private $emailTobcc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="errors_to", type="string", length=255, nullable=true)
     */
    private $errorsTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reply_to", type="string", length=255, nullable=true)
     */
    private $replyTo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recurid", type="string", length=128, nullable=true)
     */
    private $recurid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="recurrule", type="string", length=128, nullable=true)
     */
    private $recurrule;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="recurdateend", type="datetime", nullable=true)
     */
    private $recurdateend;

    /**
     * @var int|null
     *
     * @ORM\Column(name="num_vote", type="integer", nullable=true)
     */
    private $numVote;

    /**
     * @var int
     *
     * @ORM\Column(name="event_paid", type="smallint", nullable=false)
     */
    private $eventPaid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="smallint", nullable=false)
     */
    private $status = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="fk_element", type="integer", nullable=true)
     */
    private $fkElement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="elementtype", type="string", length=255, nullable=true)
     */
    private $elementtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_key", type="string", length=14, nullable=true)
     */
    private $importKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="extraparams", type="string", length=255, nullable=true)
     */
    private $extraparams;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Categorie", mappedBy="fkActioncomm")
     */
    private $fkCategorie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkCategorie = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getRefExt(): ?string
    {
        return $this->refExt;
    }

    public function setRefExt(?string $refExt): self
    {
        $this->refExt = $refExt;

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

    public function getDatep(): ?\DateTimeInterface
    {
        return $this->datep;
    }

    public function setDatep(?\DateTimeInterface $datep): self
    {
        $this->datep = $datep;

        return $this;
    }

    public function getDatep2(): ?\DateTimeInterface
    {
        return $this->datep2;
    }

    public function setDatep2(?\DateTimeInterface $datep2): self
    {
        $this->datep2 = $datep2;

        return $this;
    }

    public function getFkAction(): ?int
    {
        return $this->fkAction;
    }

    public function setFkAction(?int $fkAction): self
    {
        $this->fkAction = $fkAction;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

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

    public function getFkUserAuthor(): ?int
    {
        return $this->fkUserAuthor;
    }

    public function setFkUserAuthor(?int $fkUserAuthor): self
    {
        $this->fkUserAuthor = $fkUserAuthor;

        return $this;
    }

    public function getFkUserMod(): ?int
    {
        return $this->fkUserMod;
    }

    public function setFkUserMod(?int $fkUserMod): self
    {
        $this->fkUserMod = $fkUserMod;

        return $this;
    }

    public function getFkProject(): ?int
    {
        return $this->fkProject;
    }

    public function setFkProject(?int $fkProject): self
    {
        $this->fkProject = $fkProject;

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

    public function getFkContact(): ?int
    {
        return $this->fkContact;
    }

    public function setFkContact(?int $fkContact): self
    {
        $this->fkContact = $fkContact;

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

    public function getFkUserAction(): ?int
    {
        return $this->fkUserAction;
    }

    public function setFkUserAction(?int $fkUserAction): self
    {
        $this->fkUserAction = $fkUserAction;

        return $this;
    }

    public function getFkUserDone(): ?int
    {
        return $this->fkUserDone;
    }

    public function setFkUserDone(?int $fkUserDone): self
    {
        $this->fkUserDone = $fkUserDone;

        return $this;
    }

    public function getTransparency(): ?int
    {
        return $this->transparency;
    }

    public function setTransparency(?int $transparency): self
    {
        $this->transparency = $transparency;

        return $this;
    }

    public function getPriority(): ?int
    {
        return $this->priority;
    }

    public function setPriority(?int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    public function getVisibility(): ?string
    {
        return $this->visibility;
    }

    public function setVisibility(?string $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    public function getFulldayevent(): ?int
    {
        return $this->fulldayevent;
    }

    public function setFulldayevent(int $fulldayevent): self
    {
        $this->fulldayevent = $fulldayevent;

        return $this;
    }

    public function getPercent(): ?int
    {
        return $this->percent;
    }

    public function setPercent(int $percent): self
    {
        $this->percent = $percent;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getDurationp(): ?float
    {
        return $this->durationp;
    }

    public function setDurationp(?float $durationp): self
    {
        $this->durationp = $durationp;

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

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getCallingDuration(): ?int
    {
        return $this->callingDuration;
    }

    public function setCallingDuration(?int $callingDuration): self
    {
        $this->callingDuration = $callingDuration;

        return $this;
    }

    public function getEmailSubject(): ?string
    {
        return $this->emailSubject;
    }

    public function setEmailSubject(?string $emailSubject): self
    {
        $this->emailSubject = $emailSubject;

        return $this;
    }

    public function getEmailMsgid(): ?string
    {
        return $this->emailMsgid;
    }

    public function setEmailMsgid(?string $emailMsgid): self
    {
        $this->emailMsgid = $emailMsgid;

        return $this;
    }

    public function getEmailFrom(): ?string
    {
        return $this->emailFrom;
    }

    public function setEmailFrom(?string $emailFrom): self
    {
        $this->emailFrom = $emailFrom;

        return $this;
    }

    public function getEmailSender(): ?string
    {
        return $this->emailSender;
    }

    public function setEmailSender(?string $emailSender): self
    {
        $this->emailSender = $emailSender;

        return $this;
    }

    public function getEmailTo(): ?string
    {
        return $this->emailTo;
    }

    public function setEmailTo(?string $emailTo): self
    {
        $this->emailTo = $emailTo;

        return $this;
    }

    public function getEmailTocc(): ?string
    {
        return $this->emailTocc;
    }

    public function setEmailTocc(?string $emailTocc): self
    {
        $this->emailTocc = $emailTocc;

        return $this;
    }

    public function getEmailTobcc(): ?string
    {
        return $this->emailTobcc;
    }

    public function setEmailTobcc(?string $emailTobcc): self
    {
        $this->emailTobcc = $emailTobcc;

        return $this;
    }

    public function getErrorsTo(): ?string
    {
        return $this->errorsTo;
    }

    public function setErrorsTo(?string $errorsTo): self
    {
        $this->errorsTo = $errorsTo;

        return $this;
    }

    public function getReplyTo(): ?string
    {
        return $this->replyTo;
    }

    public function setReplyTo(?string $replyTo): self
    {
        $this->replyTo = $replyTo;

        return $this;
    }

    public function getRecurid(): ?string
    {
        return $this->recurid;
    }

    public function setRecurid(?string $recurid): self
    {
        $this->recurid = $recurid;

        return $this;
    }

    public function getRecurrule(): ?string
    {
        return $this->recurrule;
    }

    public function setRecurrule(?string $recurrule): self
    {
        $this->recurrule = $recurrule;

        return $this;
    }

    public function getRecurdateend(): ?\DateTimeInterface
    {
        return $this->recurdateend;
    }

    public function setRecurdateend(?\DateTimeInterface $recurdateend): self
    {
        $this->recurdateend = $recurdateend;

        return $this;
    }

    public function getNumVote(): ?int
    {
        return $this->numVote;
    }

    public function setNumVote(?int $numVote): self
    {
        $this->numVote = $numVote;

        return $this;
    }

    public function getEventPaid(): ?int
    {
        return $this->eventPaid;
    }

    public function setEventPaid(int $eventPaid): self
    {
        $this->eventPaid = $eventPaid;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getFkElement(): ?int
    {
        return $this->fkElement;
    }

    public function setFkElement(?int $fkElement): self
    {
        $this->fkElement = $fkElement;

        return $this;
    }

    public function getElementtype(): ?string
    {
        return $this->elementtype;
    }

    public function setElementtype(?string $elementtype): self
    {
        $this->elementtype = $elementtype;

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

    public function getExtraparams(): ?string
    {
        return $this->extraparams;
    }

    public function setExtraparams(?string $extraparams): self
    {
        $this->extraparams = $extraparams;

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
            $fkCategorie->addFkActioncomm($this);
        }

        return $this;
    }

    public function removeFkCategorie(Categorie $fkCategorie): self
    {
        if ($this->fkCategorie->removeElement($fkCategorie)) {
            $fkCategorie->removeFkActioncomm($this);
        }

        return $this;
    }

}
