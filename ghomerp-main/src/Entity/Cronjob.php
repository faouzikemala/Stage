<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cronjob
 *
 * @ORM\Table(name="cronjob", indexes={@ORM\Index(name="idx_cronjob_datelastrun", columns={"datelastrun"}), @ORM\Index(name="idx_cronjob_datestart", columns={"datestart"}), @ORM\Index(name="idx_cronjob_status", columns={"status"}), @ORM\Index(name="idx_cronjob_datenextrun", columns={"datenextrun"}), @ORM\Index(name="idx_cronjob_dateend", columns={"dateend"})})
 * @ORM\Entity
 */
class Cronjob
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="tms", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $tms = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datec", type="datetime", nullable=true)
     */
    private $datec;

    /**
     * @var string
     *
     * @ORM\Column(name="jobtype", type="string", length=10, nullable=false)
     */
    private $jobtype;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="text", length=65535, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="command", type="string", length=255, nullable=true)
     */
    private $command;

    /**
     * @var string|null
     *
     * @ORM\Column(name="classesname", type="string", length=255, nullable=true)
     */
    private $classesname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objectname", type="string", length=255, nullable=true)
     */
    private $objectname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="methodename", type="string", length=255, nullable=true)
     */
    private $methodename;

    /**
     * @var string|null
     *
     * @ORM\Column(name="params", type="text", length=65535, nullable=true)
     */
    private $params;

    /**
     * @var string|null
     *
     * @ORM\Column(name="md5params", type="string", length=32, nullable=true)
     */
    private $md5params;

    /**
     * @var string|null
     *
     * @ORM\Column(name="module_name", type="string", length=255, nullable=true)
     */
    private $moduleName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="priority", type="integer", nullable=true)
     */
    private $priority = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datelastrun", type="datetime", nullable=true)
     */
    private $datelastrun;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datenextrun", type="datetime", nullable=true)
     */
    private $datenextrun;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datestart", type="datetime", nullable=true)
     */
    private $datestart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateend", type="datetime", nullable=true)
     */
    private $dateend;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="datelastresult", type="datetime", nullable=true)
     */
    private $datelastresult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastresult", type="text", length=65535, nullable=true)
     */
    private $lastresult;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lastoutput", type="text", length=65535, nullable=true)
     */
    private $lastoutput;

    /**
     * @var string
     *
     * @ORM\Column(name="unitfrequency", type="string", length=255, nullable=false, options={"default"="3600"})
     */
    private $unitfrequency = '3600';

    /**
     * @var int
     *
     * @ORM\Column(name="frequency", type="integer", nullable=false)
     */
    private $frequency = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="maxrun", type="integer", nullable=false)
     */
    private $maxrun = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="nbrun", type="integer", nullable=true)
     */
    private $nbrun;

    /**
     * @var int|null
     *
     * @ORM\Column(name="autodelete", type="integer", nullable=true)
     */
    private $autodelete = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"default"="1"})
     */
    private $status = 1;

    /**
     * @var int
     *
     * @ORM\Column(name="processing", type="integer", nullable=false)
     */
    private $processing = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="test", type="string", length=255, nullable=true, options={"default"="1"})
     */
    private $test = '1';

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
     * @ORM\Column(name="fk_mailing", type="integer", nullable=true)
     */
    private $fkMailing;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="text", length=65535, nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libname", type="string", length=255, nullable=true)
     */
    private $libname;

    /**
     * @var int|null
     *
     * @ORM\Column(name="entity", type="integer", nullable=true)
     */
    private $entity = '0';

    public function getRowid(): ?int
    {
        return $this->rowid;
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

    public function getDatec(): ?\DateTimeInterface
    {
        return $this->datec;
    }

    public function setDatec(?\DateTimeInterface $datec): self
    {
        $this->datec = $datec;

        return $this;
    }

    public function getJobtype(): ?string
    {
        return $this->jobtype;
    }

    public function setJobtype(string $jobtype): self
    {
        $this->jobtype = $jobtype;

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

    public function getCommand(): ?string
    {
        return $this->command;
    }

    public function setCommand(?string $command): self
    {
        $this->command = $command;

        return $this;
    }

    public function getClassesname(): ?string
    {
        return $this->classesname;
    }

    public function setClassesname(?string $classesname): self
    {
        $this->classesname = $classesname;

        return $this;
    }

    public function getObjectname(): ?string
    {
        return $this->objectname;
    }

    public function setObjectname(?string $objectname): self
    {
        $this->objectname = $objectname;

        return $this;
    }

    public function getMethodename(): ?string
    {
        return $this->methodename;
    }

    public function setMethodename(?string $methodename): self
    {
        $this->methodename = $methodename;

        return $this;
    }

    public function getParams(): ?string
    {
        return $this->params;
    }

    public function setParams(?string $params): self
    {
        $this->params = $params;

        return $this;
    }

    public function getMd5params(): ?string
    {
        return $this->md5params;
    }

    public function setMd5params(?string $md5params): self
    {
        $this->md5params = $md5params;

        return $this;
    }

    public function getModuleName(): ?string
    {
        return $this->moduleName;
    }

    public function setModuleName(?string $moduleName): self
    {
        $this->moduleName = $moduleName;

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

    public function getDatelastrun(): ?\DateTimeInterface
    {
        return $this->datelastrun;
    }

    public function setDatelastrun(?\DateTimeInterface $datelastrun): self
    {
        $this->datelastrun = $datelastrun;

        return $this;
    }

    public function getDatenextrun(): ?\DateTimeInterface
    {
        return $this->datenextrun;
    }

    public function setDatenextrun(?\DateTimeInterface $datenextrun): self
    {
        $this->datenextrun = $datenextrun;

        return $this;
    }

    public function getDatestart(): ?\DateTimeInterface
    {
        return $this->datestart;
    }

    public function setDatestart(?\DateTimeInterface $datestart): self
    {
        $this->datestart = $datestart;

        return $this;
    }

    public function getDateend(): ?\DateTimeInterface
    {
        return $this->dateend;
    }

    public function setDateend(?\DateTimeInterface $dateend): self
    {
        $this->dateend = $dateend;

        return $this;
    }

    public function getDatelastresult(): ?\DateTimeInterface
    {
        return $this->datelastresult;
    }

    public function setDatelastresult(?\DateTimeInterface $datelastresult): self
    {
        $this->datelastresult = $datelastresult;

        return $this;
    }

    public function getLastresult(): ?string
    {
        return $this->lastresult;
    }

    public function setLastresult(?string $lastresult): self
    {
        $this->lastresult = $lastresult;

        return $this;
    }

    public function getLastoutput(): ?string
    {
        return $this->lastoutput;
    }

    public function setLastoutput(?string $lastoutput): self
    {
        $this->lastoutput = $lastoutput;

        return $this;
    }

    public function getUnitfrequency(): ?string
    {
        return $this->unitfrequency;
    }

    public function setUnitfrequency(string $unitfrequency): self
    {
        $this->unitfrequency = $unitfrequency;

        return $this;
    }

    public function getFrequency(): ?int
    {
        return $this->frequency;
    }

    public function setFrequency(int $frequency): self
    {
        $this->frequency = $frequency;

        return $this;
    }

    public function getMaxrun(): ?int
    {
        return $this->maxrun;
    }

    public function setMaxrun(int $maxrun): self
    {
        $this->maxrun = $maxrun;

        return $this;
    }

    public function getNbrun(): ?int
    {
        return $this->nbrun;
    }

    public function setNbrun(?int $nbrun): self
    {
        $this->nbrun = $nbrun;

        return $this;
    }

    public function getAutodelete(): ?int
    {
        return $this->autodelete;
    }

    public function setAutodelete(?int $autodelete): self
    {
        $this->autodelete = $autodelete;

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

    public function getProcessing(): ?int
    {
        return $this->processing;
    }

    public function setProcessing(int $processing): self
    {
        $this->processing = $processing;

        return $this;
    }

    public function getTest(): ?string
    {
        return $this->test;
    }

    public function setTest(?string $test): self
    {
        $this->test = $test;

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

    public function getFkMailing(): ?int
    {
        return $this->fkMailing;
    }

    public function setFkMailing(?int $fkMailing): self
    {
        $this->fkMailing = $fkMailing;

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

    public function getLibname(): ?string
    {
        return $this->libname;
    }

    public function setLibname(?string $libname): self
    {
        $this->libname = $libname;

        return $this;
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


}
